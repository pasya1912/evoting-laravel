<?php
namespace App\Service;
interface KandidatService{
    public function getKandidat();
    public function storeKandidat($data,$request);
    public function updateKandidat($id,$data,$request);
    public function hapusKandidat($id,$request);
    public function getDetail($id);

}