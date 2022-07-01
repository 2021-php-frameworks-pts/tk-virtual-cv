<?php

/** @var yii\web\View $this */

use yii\db\Query;

$skills = (new Query())
    ->select(['id', 'name', 'proficiency'])
    ->from('skills')
    ->orderBy(['proficiency' => SORT_DESC])
    ->all();
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">List of my skills</h1>
        <p class="lead">Here you can find all languages and frameworks that I worked with.</p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <h2>Skills</h2>
                <p>
                    <?php
                    echo '<table class="skill-table card">';
                    echo '<th>' . 'Name' . '</th>';
                    echo '<th>' . 'Proficiency' . '</th>';

                    $skillRows = reset($skills);
                    foreach ($skills as $skill) {
                        echo '<tr>';
                            echo '<td>' . ($skill['name']) . '</td>';
                            echo '<td>';
                                echo '<div class="progress">';
                                    echo '<div class="progress-bar" role="progressbar" style="width:' . ($skill['proficiency'] * 100) . '%" aria-valuenow="' . ($skill['proficiency'] * 100) . '" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '</div>';
                            echo '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                    ?>
                </p>
            </div>
        </div>

    </div>
</div>
