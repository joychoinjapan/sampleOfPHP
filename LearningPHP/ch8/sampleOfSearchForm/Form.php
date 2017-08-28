<form method="POST" action="<?=$form->encode($_SERVER['PHP_SELF'])?>">
<table>
    <?php if($errors){?>
        <tr>
            <td>You need to correct the following errors:</td>
            <td>
                <ul>
                    <?PHP foreach ($errors as $error){?>
                        <li><?=$form->encode($error)?></li>
                    <?PHP }?>
                </ul>
            </td>
        </tr>
    <?PHP }?>
    <tr>
        <td>Dish Name:</td>
        <td><?=$form->input('text',['name'=>'dish_name'])?></td>
    </tr>
    <tr>
        <td>Minimun Price:</td>
        <td><?=$form->input('text',['name'=>'min_price'])?></td>
    </tr>
    <tr>
        <td>Maximum Pirce:</td>
        <td><?=$form->input('text',['name'=>'max_price'])?></td>
    </tr>
    <tr>
        <td>Spicy:</td>
        <td><?=$form->select($GLOBALS['spicy_choices'],['name'=>'is_spicy'])?></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <?=$form->input('submit',['name'=>'search','value'=>'Search'])?>
        </td>
    </tr>
</table>
</form>