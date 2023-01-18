
 <div class="container">
        <form action="store" method="post">
            <div class="form-group">
                <label>Название конференции:</label>
                <input type="text" class="form-control" name="title" value="">
                <small id="emailHelp" class="form-text text-muted">От 2 до 255 символов</small>
            </div>
            <div class="form-group date ">
                <label class="form-check-label" for="exampleCheck1">Дата конференции</label><br/>
                <input type="date"  name="date" id="davaToday" formmethod="post">
            </div>


            <div id="formap">
                <div id="map"></div>
            </div>
            <br/>
            <select class="form-control" size="0" name="country">
                <?php

                foreach ($countries as $country){
                    echo "<option>" . $country["name"] . "</option>";
                }

                ?>

            </select>
            <br/>
            <div id="latLng">
                <input type="hidden" id="latitude" name="latitude" v-bind:value="latitude" />
                <input type="hidden" id="longitude" name="longitude" v-bind:value="longitude" />
            </div>

            <a href="/" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Назад</a>

            <input type="submit" value="Сохранить" class="btn btn-primary">
        </form>




    </div>
    <script src="/src/script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLg3wS_BOR_zG08x_N6Kfg_ZcZX1-3QAE&callback=initMap" async defer></script>


