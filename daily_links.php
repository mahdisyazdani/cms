<script src=""></script>
<form action="post_daily_links.php" method="post">
    <input name="link_name" type="text" placeholder="Link name"/>
    <br/>
    <input name="link_address" type="text" value="https://" placeholder="Link address"/>
    <br/>
    <input name="description" type="text" placeholder="Description"/>
    <br/>
    <input type="submit" value="Insert Link"/>
    <input type="button" value="Refuse" id="refuse-button"/>
</form>