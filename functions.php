<?php 

function get_field($key, $page_id = 0) {
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0) {
    echo get_field($key, $page_id);
}

add_action('cmb2_admin_init', 'cmb2_fields_home');
    function cmb2_fields_home() {
    $cmb = new_cmb2_box([
         'id' => 'home_box',
         'title' => 'Home',
         'object_types' => ['page'], // Disponível apenas em páginas
         'show_on' => [ 
             'key' => 'page-template',
             'value' => 'page-home.php', // Template específico
         ],
     ]);

    //  Grupo de imagens repetível
     $images_group = $cmb->add_field([
        'name' => 'Galeria de Motos',
        'id' => 'galeria_motos',
        'type' => 'group',
        'repeatable' => true, // Permitir repetição
        'options' => [
            'group_title'   => 'Foto {#}', // Título do grupo (incrementa automaticamente)
            'add_button'    => 'Adicionar Nova Foto',
            'remove_button' => 'Remover Foto',
            'sortable'      => true, // Ordenável
        ],
     ]);

     // Campo para a imagem dentro do grupo
     $cmb->add_group_field($images_group, [
        'name' => 'Foto da Moto',
        'id'   => 'foto_moto',
        'type' => 'file',
        'options' => [
            'url' => false, // Ocultar URL direta no campo
        ],
     ]);
}


    

    
//add imagem
add_action('cmb2_admin_init', 'cmb2_fields_comprar');
function cmb2_fields_comprar() {
    $cmb = new_cmb2_box([
         'id' => 'comprar_box',
         'title' => 'Comprar',
         'object_types' => ['page'],
         'show_on' => [ 
             'key' => 'page-template',
             'value' => 'page-comprar.php',
         ],
     ]);

     $cmb -> add_field ([
        'name' => 'Foto Motos',
        'id' => 'foto_motos',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);
    }

  //campo de texto
    // $cmb -> add_field([
    //     'name' => 'Motos novas',
    //     'id' => 'Motos novas',
    //     'type' => 'text' 
    // ]);

    

?> 