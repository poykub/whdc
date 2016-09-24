<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 15/9/2559
 * Time: 9:57
 */
use yii\helpers\Html;
use miloschuman\highcharts\HighchartsAsset;
use miloschuman\highcharts\Highcharts;

HighchartsAsset::register($this)->withScripts([
    'highcharts-more',
    'themes/grid'
]);

$this->params['breadcrumbs'][] = ['label' => 'ข้อมูลพื้นฐาน', 'url' => ['base-data/index']];
$this->params['breadcrumbs'][] = 'ประชากร';
$this->title = 'ตัวอย่างข้อมูลประชากร';
?>
<div class="well">
    <form method="POST">
        <div class="row">
            <div class="col-sm-6">
                <?php
                $list = yii\helpers\ArrayHelper::map(app\models\ChospitalAmp::find()->all(), 'hoscode', 'hosname');
                echo yii\helpers\Html::dropDownList('hospcode',$hospcode, $list, [
                    'prompt' => 'เลือกสถานบริการ',
                    'class' => 'form-control'
                ]);
                ?>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-raised btn-danger">ตกลง</button>
            </div>
        </div>
    </form>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">ตัวอย่างข้อมูลประชากร</h3>
    </div>
    <div class="panel-body">
        <?php
        if(count($rawData) < 21){
            echo "<div class='alert alert-info'>ไม่มีข้อมูล</div>";
            return;
        }

        $male = [
            $rawData[0]['male'] * (-1), $rawData[1]['male'] * (-1), $rawData[2]['male'] * (-1)
            , $rawData[3]['male'] * (-1), $rawData[4]['male'] * (-1), $rawData[5]['male'] * (-1)
            , $rawData[6]['male'] * (-1), $rawData[7]['male'] * (-1), $rawData[8]['male'] * (-1)
            , $rawData[9]['male'] * (-1), $rawData[10]['male'] * (-1), $rawData[11]['male'] * (-1)
            , $rawData[12]['male'] * (-1), $rawData[13]['male'] * (-1), $rawData[14]['male'] * (-1)
            , $rawData[15]['male'] * (-1), $rawData[16]['male'] * (-1), $rawData[17]['male'] * (-1)
            , $rawData[18]['male'] * (-1), $rawData[19]['male'] * (-1), $rawData[20]['male'] * (-1)
        ];
        $js_male = implode(',', $male);

        $female = [
            $rawData[0]['female'], $rawData[1]['female'], $rawData[2]['female']
            , $rawData[3]['female'], $rawData[4]['female'], $rawData[5]['female']
            , $rawData[6]['female'], $rawData[7]['female'], $rawData[8]['female']
            , $rawData[9]['female'], $rawData[10]['female'], $rawData[11]['female']
            , $rawData[12]['female'], $rawData[13]['female'], $rawData[14]['female']
            , $rawData[15]['female'], $rawData[16]['female'], $rawData[17]['female']
            , $rawData[18]['female'], $rawData[19]['female'], $rawData[20]['female']
        ];

        $js_female = implode(',', $female);


        //คำนวณค่า max , min
        $max_female = max($female);
        $max_male = abs(min($male));
        $max = $max_female > $max_male ? $max_female : $max_male;

        $categories = ['0-4', '5-9', '10-14', '15-19',
            '20-24', '25-29', '30-34', '35-39', '40-44',
            '45-49', '50-54', '55-59', '60-64', '65-69',
            '70-74', '75-79', '80-84', '85-89', '90-94',
            '95-99', '100 + '];
        $js_categories = implode("','", $categories);

        $this->registerJs("
        var categories = ['$js_categories'];    
        $('#ch1').highcharts({
            colors: ['#ED921C', '#1F7CDB'],
            chart: {
                type: 'bar',
                plotBackgroundImage:'./images/bg_pop.png',
                height:460
            },
            credits:{'enabled':false},
            title: {
                text: 'ประชากร $hosname'
            },           
            subtitle: {
                text: ' คำนวณอายุจากปีเกิด จากแฟ้ม person'
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { 
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function () {
                        return (Math.abs(this.value));
                    }
                },
                min: -$max,
                max: $max
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + ', อายุ ' + this.point.category + '</b><br/>' +
                        'ประชากร: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
                }
            },
            series: [{
                name: 'ชาย',
                data: [$js_male]
            }, {
                name: 'หญิง',
                data: [$js_female]
            }]
        });
    ");
        ?>
        <div id="ch1"></div>
    </div>
</div>
