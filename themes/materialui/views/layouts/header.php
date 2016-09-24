<?php
use yii\bootstrap\Html;
use yii\helpers\Url;
?>
<header class="header header-transparent header-waterfall ui-header">
    <ul class="nav nav-list pull-left">
        <li>
            <a data-toggle="menu" href="#ui_menu">
                <span class="icon icon-lg">menu</span>
            </a>
        </li>
    </ul>
    <a class="header-logo margin-left-no" href="<?= Yii::$app->homeUrl; ?>">WPH Datacenter</a>
    <ul class="nav nav-list pull-right">
        <li class="dropdown margin-right">
            <a class="btn btn-flat waves-attach" href="<?= Yii::$app->homeUrl; ?>"> หน้าหลัก </a>
        </li>
        <li class="dropdown margin-right">
            <a class="btn btn-flat waves-attach" href="<?= Url::to(['/site/about']) ?>"> เกี่ยวกับเรา </a>
        </li>
        <?php if(Yii::$app->user->can('admin')){ ?>
            <li class="dropdown margin-right">
                <a class="dropdown-toggle padding-left-no padding-right-no" data-toggle="dropdown">
                    <span class="btn btn-flat waves-attach">จัดการระบบ </span><i class="material-icons" >keyboard_arrow_down</i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a class="padding-right-lg waves-attach" href="<?= Url::to(['/user/admin/index']) ?>">
                            <i class="material-icons margin-right">perm_identity</i>ผู้ใช้งาน</a>
                    </li>
                    <li>
                        <a class="padding-right-lg waves-attach" href="<?= Url::to(['/admin/default']) ?>">
                            <i class="material-icons margin-right">play_for_work</i>กำหนดสิทธิ</a>
                    </li>
                </ul>
            </li>
        <?php } ?>
        <?php if(!Yii::$app->user->isGuest){ ?>
            <li class="dropdown margin-right">
                <a class="dropdown-toggle padding-left-no padding-right-no" data-toggle="dropdown">
                    <span class="access-hide">John Smith</span>
                    <span class="avatar avatar-sm">
                        <?= Html::img('@web/images/users/avatar-001.jpg', ['alt'=>'Avatar', 'class'=>'thing']);?>
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a class="padding-right-lg waves-attach" href="<?= Url::to(['/user/settings/profile']) ?>">
                            <span class="icon icon-lg margin-right">account_box</span>Profile Settings</a>
                    </li>
                    <li>
                        <a class="padding-right-lg waves-attach" href="javascript:void(0)"><span
                                class="icon icon-lg margin-right">add_to_photos</span>Upload Photo</a>
                    </li>
                    <li>
                        <a class="padding-right-lg waves-attach" href="<?= Url::to(['/user/security/logout']) ?>" data-method="post"><span class="icon icon-lg margin-right">exit_to_app</span>ออกจากระบบ</a>
                    </li>
                </ul>
            </li>
        <?php }else{ ?>
            <li class="dropdown margin-right">
                <a class="dropdown-toggle padding-left-no padding-right-no" data-toggle="dropdown">
                    <span class="btn btn-flat waves-attach">ผู้ใช้งาน </span><i class="material-icons" >keyboard_arrow_down</i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a class="padding-right-lg waves-attach" href="<?= Url::to(['/user/registration/register']) ?>">
                            <i class="material-icons margin-right">perm_identity</i>สมัครสมาชิกใหม่</a>
                    </li>
                    <li>
                        <a class="padding-right-lg waves-attach" href="<?= Url::to(['/user/security/login']) ?>">
                            <i class="material-icons margin-right">play_for_work</i>เข้าสู่ระบบ</a>
                    </li>
                </ul>
            </li>
        <?php } ?>
    </ul>
</header>