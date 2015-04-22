<img src="<?=base_url()?>assets/img/core/email_signature.jpg" /><br><br>
<table style="font-family:Arial, Helvetica, sans-serif; color:#5a5754; font-size:12px;">
    <thead>
    	<tr>
        	<th colspan="2" style="color:#0a2846; text-align:left;"><?=SITE_NAME;?></th>
        </tr>
    </thead>
	<tbody>
    	<tr>
        	<td width="60">Call</td>
            <td width="60"><?=PHONE;?></td>
        </tr>
        <tr>
        	<td width="60">Fax</td>
            <td width="60"><?=FAX;?></td>
        </tr>
        <tr>
        	<td width="60">Email</td>
            <td width="60"><?php echo 'info@'.DOMAIN;?></td>
        </tr>
        <tr>
        	<td width="60">Web</td>
            <td width="60">www.<?=DOMAIN;?></td>
        </tr>
    </tbody>
</table>