<?php
/**
 * Axiles89Grid.php
 * @package axiles89\viewgrid
 * @date: 30.07.2015 15:15
 * @author: Kyshnerev Dmitriy <dimkysh@mail.ru>
 */

namespace axiles89\viewgrid;

use yii\base\Widget;
use yii\db\Connection;
use yii\db\Query;
use yii\di\Instance;

/**
 * Class Axiles89Grid
 * @package axiles89\viewgrid
 */
class Axiles89Grid extends  Widget
{
    public $table;
    public $db = "db";
    private $ticket;

    public function init() {
        parent::init();

        $db = Instance::ensure($this->db, Connection::className());

        $query = new Query;
        $this->ticket = $query->select(['*'])
                ->from($this->table)
                ->createCommand($db)
                ->queryAll();

    }

    public function run()
    {
        return $this->render('Axiles89Grid', ['ticket' => $this->ticket]);
    }

}