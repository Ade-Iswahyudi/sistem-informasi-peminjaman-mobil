<div style="border:1px solid #FFA800; padding:10px; overflow:auto; width:600px; height:260px;">
<form action="#" method="POST" name="forminputtanggal" enctype="multipart/form-data">
    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
            <td><font color="orange" size="2">FORM INPUT TANGGAL</font></td>
        </tr>
    </table>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="36">
            <td> </td>
            <td>Tanggal</td>
            <td><input name="tgl_upload" value="" size="24"> <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.forminputtanggal.tgl_upload);return false;" ><img name="popcal" align="absmiddle" src="calender/calbtn.gif" width="34" height="22" border="0" alt=""></a></td>
        </tr>
        <tr height="36">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Reset"></td>
        </tr>
    </table>
</form>
</div>
<iframe width=174 height=189 name="gToday:normal:agenda.js" id="gToday:normal:agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>