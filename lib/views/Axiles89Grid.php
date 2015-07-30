<?php
    use axiles89\viewgrid\assets\Axiles89GridAsset;

    Axiles89GridAsset::register($this);
?>

<?if (count($ticket) > 0):?>

    <table class="table">
        <thead>
            <th>№</th>
            <? foreach ($ticket[0] as $key => $value):?>
                <th><?=$key?></th>
            <?endforeach;?>
        </thead>
        <tbody>
            <? foreach ($ticket as $key => $value):?>
               <tr>
                   <td><?=$key+1?></td>
                    <?foreach ($value as $valueTable):?>
                        <td><?=$valueTable?></td>
                    <?endforeach;?>
               </tr>
            <?endforeach;?>
        </tbody>



    </table>

<?endif?>
