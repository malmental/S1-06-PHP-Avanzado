<?php

enum Tema: string
{
    case PHP = 'PHP';
    case CSS = 'CSS';
    case HTML = 'HTML';
    case SQL = 'SQL';
    case Laravel = 'Laravel';
}

enum TipoRecurso: string
{
    case ARCHIVO = 'Archivo';
    case ARTICULO_WEB = 'Artículo Web';
    case VIDEO = 'Vídeo';
}

?>