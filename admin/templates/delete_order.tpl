
<h2>Do you really want to to delete {$name}?</h2>
<form class="basic-form"  action="delete_order.php" method="post">
    <div>
        <label for="columned-radios" class="icheck-label">Yes</label>
        <input type="radio" class="" value="yes" name="del" checked="checked" /> <!-- class="icheck-blue"-->

    </div>
    <div>
        <label class="icheck-label">no</label>
        <input type="radio" class="" value="no" name="del" />

    </div>




    <input type="submit" name="delete" value="Delete"/>
    <input type="text" name="id" value="{$id}"/>

</form>








<script src="http://creativico.com/admin-templates/PixProV2/assets/icheck/icheck.js" type="text/javascript"></script>
<script src="http://creativico.com/admin-templates/PixProV2/_demo/icheck.js" type="text/javascript"></script>
<script src="http://creativico.com/admin-templates/PixProV2/_demo/all-pages.js" type="text/javascript"></script>