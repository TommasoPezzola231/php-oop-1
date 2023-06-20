<?php 
    
    class Movie {
        public $name;
        public $genre;
        public $thumbnail;
        public $viewingRecommended;

        function __construct($_name, $_genre, $_thumbnail) {
            $this->name = $_name;
            $this->genre = $_genre;
            $this->thumbnail = $_thumbnail;
            $this->getViewingRecommended();
        }

        function getViewingRecommended() {
            if ($this->genre == "Horror") {
                return $this-> viewingRecommended = ">18";
            };
            
            return $this-> viewingRecommended = "All";
        }

    }

    $backToTheFuture = new Movie("Back To The Future", "sci-fi", "https://upload.wikimedia.org/wikipedia/en/d/d2/Back_to_the_Future.jpg");
    var_dump($backToTheFuture);

    $theExorcist = new Movie("The Exorcist", "Horror", "https://upload.wikimedia.org/wikipedia/en/7/7b/Exorcist_ver2.jpg");
    var_dump($theExorcist);

?>