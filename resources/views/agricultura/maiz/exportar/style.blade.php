<style>
    /* Reseteando estilos */
    body{
        padding:0;
        margin:0;
        box-sizing: border-box;
        font-size:16px;
        font-family: sans-serif;
    }

    img{
        display: block;
        max-width: 100%;
    }

    .cuerpo{
        padding: 10px 20px;
    }

    .cuerpo__titulo {
        font-size:2.5rem;
        text-align: center;
    }

    .contenido__izq,
    .contenido__der,
    .contenido__center{
        border: 1px solid green;
        width:50%;
        float: left;
        padding:0 5px;
    }

    .contenido__center{
        width:100%;
        float: none;
    }

    .contenido__campo > h3{
        padding: 0 0;
        font-size:1.75rem;
    }

    .contenido__campo > span,
    .contenido__campo > p{
        font-style: italic;
        font-size:1.5rem;
        text-indent: 20px;
        display:block;
    }

    /* pensado para notas y observaciones */
    .contenido__campo > p{
        font-size:1rem;
    }

</style>