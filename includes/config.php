<?
function set_config($key, $val){
  $GLOBALS[$key] = $val;
}

function get_config($key){
  return $GLOBALS[$key];
}


/* Caminhos */
if( $_SERVER['HTTP_HOST'] == 'localhost'){

  set_config('SITE_URL'         , 'http://localhost/git/dudy/');
  set_config('SITE_PATH'        , 'D:/Git/dudy/');

} else {

  set_config('SITE_URL'         , 'http://sheepmanager.zbraestudio.com.br/');
  set_config('SITE_PATH'        , '/dados/http/zbraestudio.com.br/sheepmanager/');

}

set_config('TITLE',                   '');
set_config('SYSTEM_TITLE',            'Dudy Manager');
set_config('FOOTER_TEXT',            '<strong>Dudy Manager</strong> v1 - &copy; 2018 - Todos os Direitos Reservados.');

/* Banco de Dados */
if( $_SERVER['HTTP_HOST'] == 'localhost')
  set_config('DB_HOST'          , 'tiago.art.br');
else
  set_config('DB_HOST'          , 'localhost');

set_config('DB_USER'          , 'tiagoar1');
set_config('DB_PASS'          , 'Nw041203!');
set_config('DB_DB'            , 'tiagoar1_job_dudy');