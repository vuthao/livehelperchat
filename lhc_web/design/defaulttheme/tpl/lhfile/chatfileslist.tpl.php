<?php foreach ($items as $file) : ?>
<li id="file-id-<?php echo $file->id?>"><a title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('files/files','Delete file')?>" onclick="return lhinst.deleteChatfile('<?php echo $file->id?>')" class="button tiny round icon-trash"></a> <a href="<?php echo erLhcoreClassDesign::baseurl('file/downloadfile')?>/<?php echo $file->id?>/<?php echo $file->security_hash?>" class="link" target="_blank"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('files/files','Download file')?> - <?php echo htmlspecialchars($file->upload_name).' ['.$file->extension.']'?> </a></li>
<?php endforeach; ?>