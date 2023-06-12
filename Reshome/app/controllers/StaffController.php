<?php

class StaffController extends Controller {

    // Visualiser une réservation
    public function viewReservation($id) {
        $reservation = new Reservation($this->db);
        $data = $reservation->find($id);
        $this->render('reservations/view', $data);
    }

    // Modifier une réservation
    public function updateReservation($id, $data) {
        $reservation = new Reservation($this->db);
        $reservation->update($id, $data);
        $this->redirect('/staff/reservations');
    }
}
