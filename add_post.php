<form action="post_add_post.php" method="post">
    <input name="title" type="text" placeholder="title"/>
    <br/>
    <textarea name="body" id="" cols="30" rows="10" placeholder="Enter the body of the post..."></textarea>
    <br/>
    <tbody>
        <tr>
            <td height="27" colspan="2" style="text-align: left">
                Date
                <input name="txYear" type="text"  maxlength="4" id="Year" title="Year" onchange
                ="document.getElementById('chkAutomateTime').checked=false;" style="width: 50px">/
                <input name="txMonth" type="text"  maxlength="2" id="Month" title=" Month" onchange
                ="document.getElementById('chkAutomateTime').checked=false;" style="width: 33px">/
                <input name="txDay" type="text"  maxlength="2" id="Day" title="Day"  onchange
                ="document.getElementById('chkAutomateTime').checked=false;" style="width: 30px;" >

                
            </td>
        </tr>
    </tbody>
    <input type="submit" value="Submit Post"/>
</form>