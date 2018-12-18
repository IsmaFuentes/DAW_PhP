<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
    
    <?php
    //función simplificada
    function paginacion($paginas){
        $num = 1;//número de cada página
        echo "<ul class='pagination'>";
            echo "<li class='page-item'><a class='page-link' href='#'>Primera página</a></li>";
                for($i = 0; $i < $paginas; $i++){
                    echo "<li class='page-item'><a class='page-link' href='#'>$num</a></li>";
                    $num++;
                }
            echo "<li class='page-item'><a class='page-link' href='#'>Última página</a></li>";
        echo "</ul>";      
    }

    //función proporcionada
    function pag($page,$total_rows,$records_per_page){
        $page_url = "";
        echo "<ul class='pagination'>";
        // button for first page
        if($page>1){
            echo "<li class='active'><a class='page-link' href='{$page_url}' title='Go to the first page.'>";
                echo "First Page";
            echo "</a></li>";
        }
        // calculate total number of pages
        $total_pages = ceil($total_rows / $records_per_page);
        // range of links to show
        $range = 2;
        // display links to 'range of pages' around 'current page'
        $initial_num = $page - $range;
        $condition_limit_num = ($page + $range)  + 1;

        for ($x=$initial_num; $x<$condition_limit_num; $x++) {
            // be sure '$x is greater than 0' AND 'less than or equal to the $total_pages'
            if (($x > 0) && ($x <= $total_pages)) {
                // current page
                if ($x == $page) {
                    echo "<li class='active'><a class='page-link' href=\"#\">$x <span class=\"sr-only\">(current)</span></a></li>";
                } 
                // not current page
                else {
                    echo "<li><a class='page-link' href='{$page_url}page=$x'>$x</a></li>";
                }
            }
        }
        // button for last page
        if($page<$total_pages){
            echo "<li><a class='page-link' href='" .$page_url . "page={$total_pages}' title='Last page is {$total_pages}.'>";
                echo "Last Page";
            echo "</a></li>";
        }
        echo "</ul>";
    }

    //llamamos a las funciones e introducimos los parámetros
        echo "Función simplificada";
        paginacion(5);
        echo "Paginador";
        pag(3,10,2);
    ?> 
    </body>
</html>
