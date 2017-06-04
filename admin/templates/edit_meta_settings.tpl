<!-- Form Validation Start -->
<div class="col-lg-6">
    <div class="box">

        <!-- Title Bar Start -->
        <div class="box-title">
            <span class="gray">Редактирование meta-тегов</span>
        </div>
        <!-- Title Bar End -->

        <!-- Content Start -->
        <div class="content">

            <form method="POST" action="edit_meta_settings.php" enctype="multipart/form-data">


                <!-- Required -->
                <label for="comment">meta_title_ru</label>
                <input type="text" name="meta_title_ru" class="form-control required" value="{$meta_title_ru}"/>

                <label for="comment">meta_title_eng</label>
                <input type="text" name="meta_title_eng" class="form-control required" value="{$meta_title_ru}"/>

                <label for="comment">meta_description_ru</label>
                <input type="text" name="meta_description_ru" class="form-control required" value="{$meta_description_ru}"/>

                <label for="comment">meta_description_eng</label>
                <input type="text" name="meta_description_eng" class="form-control required" value="{$meta_description_eng}"/>

                <label for="comment">meta_key_words_ru</label>
                <input type="text" name="meta_key_words_ru" class="form-control required" value="{$meta_key_words_ru}"/>

                <label for="comment">meta_key_words_eng</label>
                <input type="text" name="meta_key_words_eng" class="form-control required" value="{$meta_key_words_eng}"/>

                <label for="comment">name_ru</label>
                <input type="text" name="name_ru" class="form-control required" value="{$name_ru}"/>

                <label for="comment">name_eng</label>
                <input type="text" name="name_eng" class="form-control required" value="{$name_eng}"/>

                <input type="hidden" name="id" value="{$id}"/>


                <!-- Required -->


                <div class="row">
                    <div class="col-lg-12 text-right">
                        <input type="submit" name="sent" value="Редактировать" class="btn btn-success btn-wide"/>
                    </div>
                </div>

            </form>

        </div>
        <!-- Content End -->

    </div>
</div>
<!-- Form Validation End -->
