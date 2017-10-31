<?php
namespace Ife\AloesBundle\AloesModel;

trait ResultIndexerTrait
{
    private function groupRowsBy($data, $key = 'parent_id')
    {
        $result = array();
        foreach($data as $row) {
            $result[$row[$key]][] = $row;
        }
        return $result;
    }

    private function indexWeightsById($data, $key = 'id')
    {
        $result = array();
        foreach($data as $row) {
            $result[$row[$key]] = $row['weight'];
        }
        return $result;
    }
}