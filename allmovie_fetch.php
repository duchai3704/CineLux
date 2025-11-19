 <?php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "SELECT * FROM add_movie WHERE status = '1'";
	
	if(isset($_POST["categroy"]) && !empty($_POST["categroy"]))
	{
		$categroy_filter = implode("','", $_POST["categroy"]);
		$query .= " AND categroy IN('".$categroy_filter."')";
	}
	if(isset($_POST["language"]) && !empty($_POST["language"]))
	{
		$language_filter = implode("','", $_POST["language"]);
		$query .= " AND language IN('".$language_filter."')";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	
	if($total_row > 0)
	{
		$delay = 0.1;
		foreach($result as $row)
		{
			$button_text = ($row['action'] == "running") ? "Book Now" : "Upcoming";
			$button_class = ($row['action'] == "running") ? "btn-book" : "btn-upcoming";
			
			$output .= '
			<div class="col-lg-4 col-md-6 col-sm-12 movie-item" style="animation-delay: '.$delay.'s">
				<div class="movie-card">
					<div class="movie-poster">
						<img src="admin/image/'. $row['image'] .'" alt="'. $row['movie_name'] .'" class="poster-img">
						<div class="movie-overlay">
							<a href="movie_details.php?pass='.$row['id'].'" class="movie-btn '.$button_class.'">
								<span class="btn-text">'. $button_text .'</span>
								<span class="btn-icon">▶</span>
							</a>
						</div>
					</div>
					<div class="movie-info">
						<h4 class="movie-title">'. $row['movie_name'] .'</h4>
						<p class="movie-detail"><strong>Director:</strong> '. $row['directer'] .'</p>
						<p class="movie-detail"><strong>Category:</strong> '. $row['categroy'] .'</p>
						<p class="movie-detail"><strong>Language:</strong> '. $row['language'] .'</p>
					</div>
				</div>
			</div>
			';
			$delay += 0.05;
		}
	}
	else
	{
		$output = '<div style="grid-column: 1 / -1; text-align: center; padding: 50px; color: white; font-size: 1.2rem;"><h3>No Movies Found</h3></div>';
	}
	echo $output;
}

?>
<style>
	.movie-item {
		animation: fadeInScale 0.6s ease-out forwards;
	}

	@keyframes fadeInScale {
		from {
			opacity: 0;
			transform: scale(0.85) translateY(20px);
		}
		to {
			opacity: 1;
			transform: scale(1) translateY(0);
		}
	}

	.movie-card {
		background: white;
		overflow: hidden;
		box-shadow: 0 10px 35px rgba(0, 0, 0, 0.2);
		transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
		height: 100%;
		display: flex;
		flex-direction: column;
		position: relative;
	}

	.movie-card::before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		height: 3px;
		background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
		z-index: 10;
	}

	.movie-card:hover {
		transform: translateY(-15px);
		box-shadow: 0 25px 70px rgba(102, 126, 234, 0.4);
	}

	.movie-poster {
		width: 100%;
		height: 380px;
		overflow: hidden;
		background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
		position: relative;
	}

	.poster-img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
		display: block;
	}

	.movie-card:hover .poster-img {
		transform: scale(1.12) rotate(-2deg);
	}

	.movie-overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: linear-gradient(135deg, rgba(102, 126, 234, 0.85) 0%, rgba(118, 75, 162, 0.85) 100%);
		display: flex;
		align-items: center;
		justify-content: center;
		opacity: 0;
		transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
		backdrop-filter: blur(5px);
	}

	.movie-card:hover .movie-overlay {
		opacity: 1;
	}

	.movie-btn {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		gap: 12px;
		padding: 14px 30px;
		background: white;
		color: #667eea;
		font-weight: 700;
		text-decoration: none;
		transition: all 0.3s ease;
		transform: scale(0.8);
		border: 2px solid white;
		position: relative;
		overflow: hidden;
	}

	.movie-btn::before {
		content: '';
		position: absolute;
		top: 50%;
		left: 50%;
		width: 0;
		height: 0;
		background: rgba(255, 255, 255, 0.2);
		border-radius: 50%;
		transform: translate(-50%, -50%);
		transition: width 0.5s, height 0.5s;
	}

	.movie-btn:hover::before {
		width: 300px;
		height: 300px;
	}

	.movie-card:hover .movie-btn {
		transform: scale(1);
	}

	.movie-btn:hover {
		background: transparent;
		color: white;
		border-color: white;
		gap: 15px;
	}

	.btn-book {
		background: linear-gradient(135deg, #10b981 0%, #059669 100%);
		color: white;
		border-color: #10b981;
	}

	.movie-card:hover .btn-book {
		background: white;
		color: #10b981;
		border-color: white;
	}

	.btn-upcoming {
		background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
		color: white;
		border-color: #f59e0b;
	}

	.movie-card:hover .btn-upcoming {
		background: white;
		color: #f59e0b;
		border-color: white;
	}

	.btn-icon {
		font-size: 0.8rem;
		transition: transform 0.3s ease;
	}

	.movie-btn:hover .btn-icon {
		transform: translateX(5px);
	}

	.movie-info {
		padding: 22px;
		flex-grow: 1;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	.movie-title {
		font-size: 1.15rem;
		font-weight: 800;
		color: #1a1a2e;
		margin-bottom: 12px;
		line-height: 1.4;
		min-height: 45px;
		display: -webkit-box;
		-webkit-line-clamp: 2;
		line-clamp: 2;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}

	.movie-detail {
		font-size: 0.9rem;
		color: #666;
		margin: 6px 0;
		line-height: 1.4;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}

	.movie-detail strong {
		color: #667eea;
		font-weight: 700;
	}

	@media (max-width: 1200px) {
		.movie-poster {
			height: 350px;
		}
	}

	@media (max-width: 768px) {
		.movie-poster {
			height: 300px;
		}

		.movie-info {
			padding: 18px;
		}

		.movie-title {
			font-size: 1rem;
			min-height: 40px;
		}

		.movie-detail {
			font-size: 0.85rem;
			margin: 4px 0;
		}

		.movie-btn {
			padding: 12px 24px;
		}
	}

	@media (max-width: 480px) {
		.movie-poster {
			height: 250px;
		}

		.movie-info {
			padding: 14px;
		}

		.movie-detail {
			font-size: 0.8rem;
		}
	}
</style>