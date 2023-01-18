
<div class="container back">
    <ul class="list-group">

            <?php

            foreach ($conferences as $conf){
                echo '
                    <a class="nav-link text-dark" href="/conference/' . $conf['slug'] . '">
                        <li class="list-group-item d-flex justify-content-between align-items-center">' .
                            $conf["title"] . '<br/>' .
                            date("d.m.Y", strtotime($conf['date'])) . '
                            
                            <form action="/conference/delete" method="post">
                                <button  class="btn btn-danger" tabindex="-1"type="submit"
                                name="slug"  value = "' . $conf['slug'] . '" >Удалить</button>
                            </form>
                        </li>
                    </a>
                ';
            }
            ?>


    </ul>

</div>