<?php

interface Utilisateur
{
    public function inscrireUtilisateur();
    public function modifierUtilisateur();
    public function supprimerUtilisateur();
    public function connecterUtilisateur();
    public function deconnecterUtilisateur();
}
