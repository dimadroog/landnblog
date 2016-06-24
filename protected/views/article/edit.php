<h2>Редактировать статью</h2>
<form action="" onsubmit="return CheckRequired()" method="post" enctype="multipart/form-data">
    <div class="ajax-hidden">
        <div class="form-group">
            <label class="control-label" for="title">Заголовок <span class="text-danger">*</span></label>
            <input type="text" id="title" class="form-control required" name="title" value="<?php echo $item->title; ?>">
        </div>

        <div id="category_select2" class="form-group">
            <label class="control-label" for="select2">Категории</label>
            <select id="select2" class="form-control" name="category[]" multiple>
                <?php foreach (Category::tree() as $value): ?>
                      <option value="<?php echo $value['id']; ?>" <?php echo ArticleCategory::isChecked($item->id, $value['id']); ?>><?php echo $value['full_name']; ?></option>
                <?php endforeach ?>
            </select>
            <p class="help-block">Выберите одну или несколько категорий.</p>
        </div>
        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">
                <label class="control-label" for="date">Дата <span class="text-danger">*</span></label>
                    <div class='input-group date' id='datetimepicker'>
                        <input type='text' class="form-control required" name="date">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function() {
              jQuery('#datetimepicker').datetimepicker({
                  locale: 'ru',
                  format: 'YYYY.MM.DD',
                  defaultDate: new Date(<?php echo $item->date; ?> * 1000),
                  // defaultDate: Date.now(),
              });
            });
            
        </script>

        <div class="form-group">
            <label class="control-label" for="wysiwyg">Содержимое статьи </label>
            <textarea class="form-control" name="wysiwyg" id="wysiwyg" rows="7"><?php echo $item->content; ?></textarea>
        </div>

        <div class="form-group">
            <label class="control-label" for="preview">Превью (анонс) </label>
            <textarea class="form-control" name="preview" id="preview" rows="7"><?php echo $item->preview; ?></textarea>            
            <p class="help-block">Ознакомительная часть статьи. Будет видна в общем списке статей на сайте.</p>
        </div>


        <div class="form-group">
            <label class="control-label" for="publish">Публикация</label>
            <div class="checkbox">
                <label>
                  <p><input type="checkbox" name="publish" <?php echo ($item->publish == 1)?'checked':''; ?> > Опубликовать статью</p>
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>
