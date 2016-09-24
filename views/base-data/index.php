<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->params['breadcrumbs'][] = 'ข้อมูลพื้นฐาน';
$this->title = 'ข้อมูลพื้นฐาน';
?>
<div class="panel panel-default">
    <div class="panel-heading">รายงาน ข้อมูลพื้นฐาน</div>
    <div class="panel-body">
        <p>
            <?php
            echo '1) '.Html::a('ตรวจสอบปริมาณข้อมูลรายแฟ้ม', ['#!']);
            ?>
        </p>
        <p>
            <?php
            echo '2) '.Html::a('จำนวนประชากรแยกตามกลุ่มอายุ', ['/base-data/people-age-data']);
            ?>
        </p>
        <p>
            <?php
            echo '3) '.Html::a('จำนวนประชากรแยกตาม TYPEAREA', ['/base-data/checktype']);
            ?>
        </p>
        <p>
            <?php
            echo '4) '.Html::a('รายการ PERSON ที่มี TYPEAREA 1,3 ซ้ำซ้อน', ['#!']);
            ?>
        </p>
        <p>
            <?php
            echo '5) '.Html::a('ตรวจสอบผลการบันทึก', ['#!']);
            ?>
        </p>
    </div>
</div>