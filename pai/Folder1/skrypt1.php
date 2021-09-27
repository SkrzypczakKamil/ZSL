<?php
print_r($_POST);
if(!empty($_POST['name']) && !empty($_POST['geometricfigure'])){
    switch($_POST['geometricfigure']){
        case "kwadrat";
        echo "kwadrat";
        break;
    case "prostokat";
    echo "prostokąt";
    break;
    }
}else{


}
?>

<script>
    history back();
</script>

<?php
}
?>
