<?php

require_once 'app/models/User.php';
require_once 'app/models/Booking.php';
require_once 'app/models/Property.php';

class ClientController extends Controller {

    public function viewAnnounce() {
        $announce = new Announce();
        // Suppose que $id est l'ID de l'annonce
        $announceDetails = $announce->find($id);
    }

    public function createReview() {
        $review = new Review();
        // Suppose que le tableau $data contient les informations sur l'avis
        $review->create($data);
    }

}

