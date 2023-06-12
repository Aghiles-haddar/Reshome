<?php

class AdminController extends Controller {

    // Supprimer un compte utilisateur
    public function deleteUser($id) {
        $user = new User($this->db);
        $user->delete($id);
        $this->redirect('/admin/users');
    }

    // Supprimer une annonce
    public function deleteAnnounce($id) {
        $announce = new Announce($this->db);
        $announce->delete($id);
        $this->redirect('/admin/announces');
    }

    // Annuler une réservation
    public function cancelReservation($id) {
        $reservation = new Reservation($this->db);
        $reservation->cancel($id);
        $this->redirect('/admin/reservations');
    }

    // Modifier une réservation
    public function updateReservation($id, $data) {
        $reservation = new Reservation($this->db);
        $reservation->update($id, $data);
        $this->redirect('/admin/reservations');
    }

    // Supprimer un commentaire
    public function deleteReview($id) {
        $review = new Review($this->db);
        $review->delete($id);
        $this->redirect('/admin/reviews');
    }
}
