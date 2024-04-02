<main>

    <div class="container py-5">
    
        <div class="row row-cols-3">
    
            <?php
            foreach($movies as $movie) {
                echo '
                <div class="col">
                    <div class="card rounded-5 bg-black text-center text-white overflow-hidden">
                
                        <img class="mb-2" src="'.$movie->image.'">
                        <h2>'.$movie->title.'</h2>
                        <h3>'.$movie->director.'</h3>
                        <h4>'.$movie->year.'</h4>
                        <h5>'.$movie->length.'</h5>
                        <h5>'.implode(", ", $movie->genres).'</h5>
    
                    </div>
                </div>
                ';
            }
            ?>
        </div>
    
    </div>
    
</main>