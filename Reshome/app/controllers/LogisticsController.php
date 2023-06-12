<?php

class LogisticsController extends Controller {

    // Afficher toutes les opérations de maintenance à faire
    public function viewMaintenanceOperations() {
        $maintenanceOperation = new MaintenanceOperation($this->db);
        $data = $maintenanceOperation->findAll();
        $this->render('logistics/maintenance_operations', $data);
    }

    // Marquer une opération de maintenance comme terminée
    public function completeMaintenanceOperation($id) {
        $maintenanceOperation = new MaintenanceOperation($this->db);
        $maintenanceOperation->complete($id);
        $this->redirect('/logistics/maintenance_operations');
    }
}
