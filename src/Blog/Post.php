<?php

// Namespace ist dazu da um Klassen leichter zu identifizieren, zu strukturieren und zuzuordnen.

namespace Blog;

use User\User as SomeUser;  //importieren der Klasse User

class Post implements PostInterface {
    public $title;

    public $user;

    public function __construct() {
        $this->user = new SomeUser();
    }
}

?>
