<?php

/**
 * Le AdminController gère toutes les opérations d'administration telles que la suppression d'utilisateurs, d'annonces, de commentaires,
 * l'annulation et la modification de réservations, et l'ajout et la récupération de toutes les annonces dans la db.
 */
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

    // Récupère tous les appartements depuis la db
    public function dashboard()
    {
        $announceModel = new Announce();
        $announces = $announceModel->findAll();
        $this->view('admin/dashboard', ['announces' => $announces]);
    }

    // Ajoute un appartement dans la db
    public function addAnnounce()
    {
        $announceModel = new Announce();
        $announceModel->setTitle($_POST['title']);
        $announceModel->setDescription($_POST['description']);
        // Set other fields from $_POST
        $announceModel->save();
        // Redirect or display a view
    }


}
