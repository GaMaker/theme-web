<!-- Unsubscribe Settings -->

<?php

$unsubscribeemails = $this -> get_option('unsubscribeemails');
$unsubscribe_usernotification = $this -> get_option('unsubscribe_usernotification');

?>

<table class="form-table">
	<tbody>
		<tr>
			<th><label for="unsubscribeondelete_Y"><?php _e('Unsubscribe on User Deletion', $this -> plugin_name); ?></label>
			<?php echo $Html -> help(__('When you delete a WordPress user under "Users" in the dashboard, the subscriber (if any) with the same email address can be deleted automatically as well.', $this -> plugin_name)); ?></th>
			<td>
				<?php $unsubscribeondelete = $this -> get_option('unsubscribeondelete'); ?>	
				<label><input <?php echo $unsubscribeondeleteCheck1 = ($unsubscribeondelete == "Y") ? 'checked="checked"' : ''; ?>  type="radio" name="unsubscribeondelete" value="Y" id="unsubscribeondelete_Y" />&nbsp;<?php _e('Yes'); ?></label>
				<label><input <?php echo $unsubscribeondeleteCheck2 = ($unsubscribeondelete == "N") ? 'checked="checked"' : ''; ?> type="radio" name="unsubscribeondelete" value="N" id="unsubscribeondelete_N" />&nbsp;<?php _e('No'); ?></label>
				<span class="howto"><?php _e('Should subscribers be unsubscribed when the user with the email address is deleted?', $this -> plugin_name); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="resubscribetext"><?php _e('Resubscribe Link Text', $this -> plugin_name); ?></label>
			<?php echo $Html -> help(__('This setting simply specifies the text to use for the link of the [newsletters_resubscribe] shortcode that you put into newsletters to generate a resubscribe link.', $this -> plugin_name)); ?></th>
			<td>
				<?php if ($this -> language_do()) : ?>
					<?php 
					
					$el = $this -> language_getlanguages(); 
					$resubscribetext = $this -> get_option('resubscribetext');
					
					?>
					<div id="resubscribetexttabs">
						<ul>
							<?php $tabnumber = 1; ?>
			                <?php foreach ($el as $language) : ?>
			                 	<li><a href="#resubscribetexttab<?php echo $tabnumber; ?>"><?php echo $this -> language_flag($language); ?></a></li>   
			                    <?php $tabnumber++; ?>
			                <?php endforeach; ?>
			            </ul>
			            
			            <?php $tabnumber = 1; ?>
			            <?php foreach ($el as $language) : ?>
			            	<div id="resubscribetexttab<?php echo $tabnumber; ?>">
			            		<input type="text" name="resubscribetext[<?php echo $language; ?>]" value="<?php echo esc_attr(stripslashes($this -> language_use($language, $resubscribetext))); ?>" id="resubscribetext_<?php echo $language; ?>" class="widefat" />
			            	</div>
			            	<?php $tabnumber++; ?>
			            <?php endforeach; ?>
					</div>
					
					<script type="text/javascript">
					jQuery(document).ready(function() {
						if (jQuery.isFunction(jQuery.fn.tabs)) {
							jQuery('#resubscribetexttabs').tabs();
						}
					});
					</script>
				<?php else : ?>
					<input class="widefat" type="text" id="<?php echo $this -> pre; ?>resubscribetext" name="resubscribetext" value="<?php echo esc_attr(stripslashes($this -> get_option('resubscribetext'))); ?>" />
				<?php endif; ?>
				<span class="howto"><?php _e('Displays a resubscribe link generated by <code>[newsletters_resubscribe]</code> in content or template of newsletters.', $this -> plugin_name); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="<?php echo $this -> pre; ?>unsubscribetext"><?php _e('Unsubscription Link Text', $this -> plugin_name); ?></label>
			<?php echo $Html -> help(__('This setting simply specifies the text to use for the link of the [wpmlunsubscribe] shortcode that you put into newsletters to generate an unsubscribe link. If you want to build your own links with custom text, you can use the [wpmlunsubscribeurl] shortcode to just generate the URL for the unsubscribe link automatically.', $this -> plugin_name)); ?></th>
			<td>
				<?php if ($this -> language_do()) : ?>
					<?php 
					
					$el = $this -> language_getlanguages(); 
					$unsubscribetext = $this -> get_option('unsubscribetext');
					
					?>
					<div id="unsubscribetexttabs">
						<ul>
							<?php $tabnumber = 1; ?>
			                <?php foreach ($el as $language) : ?>
			                 	<li><a href="#unsubscribetexttab<?php echo $tabnumber; ?>"><?php echo $this -> language_flag($language); ?></a></li>   
			                    <?php $tabnumber++; ?>
			                <?php endforeach; ?>
			            </ul>
			            
			            <?php $tabnumber = 1; ?>
			            <?php foreach ($el as $language) : ?>
			            	<div id="unsubscribetexttab<?php echo $tabnumber; ?>">
			            		<input type="text" name="unsubscribetext[<?php echo $language; ?>]" value="<?php echo esc_attr(stripslashes($this -> language_use($language, $unsubscribetext))); ?>" id="unsubscribetext_<?php echo $language; ?>" class="widefat" />
			            	</div>
			            	<?php $tabnumber++; ?>
			            <?php endforeach; ?>
					</div>
					
					<script type="text/javascript">
					jQuery(document).ready(function() {
						if (jQuery.isFunction(jQuery.fn.tabs)) {
							jQuery('#unsubscribetexttabs').tabs();
						}
					});
					</script>
				<?php else : ?>
					<input class="widefat" type="text" id="<?php echo $this -> pre; ?>unsubscribetext" name="unsubscribetext" value="<?php echo esc_attr(stripslashes($this -> get_option('unsubscribetext'))); ?>" />
				<?php endif; ?>
				<span class="howto"><?php _e('Displays an unsubscribe link generated by <code>[wpmlunsubscribe]</code> in content or template of newsletters.', $this -> plugin_name); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="unsubscribealltext"><?php _e('Unsubscribe All Link Text', $this -> plugin_name); ?></label>
			<?php echo $Html -> help(__('Same as the setting above, except that this is the link text for the unsubscribe link to all the lists that the subscriber is subscribed to using the [wpmlunsubscribeall] shortcode.', $this -> plugin_name)); ?></th>
			<td>
				<?php if ($this -> language_do()) : ?>
					<?php 
					
					$el = $this -> language_getlanguages(); 
					$unsubscribealltext = $this -> get_option('unsubscribealltext');
					
					?>
					<div id="unsubscribealltexttabs">
						<ul>
							<?php $tabnumber = 1; ?>
			                <?php foreach ($el as $language) : ?>
			                 	<li><a href="#unsubscribealltexttab<?php echo $tabnumber; ?>"><?php echo $this -> language_flag($language); ?></a></li>   
			                    <?php $tabnumber++; ?>
			                <?php endforeach; ?>
			            </ul>
			            
			            <?php $tabnumber = 1; ?>
			            <?php foreach ($el as $language) : ?>
			            	<div id="unsubscribealltexttab<?php echo $tabnumber; ?>">
			            		<input type="text" name="unsubscribealltext[<?php echo $language; ?>]" value="<?php echo esc_attr(stripslashes($this -> language_use($language, $unsubscribealltext))); ?>" id="unsubscribealltext_<?php echo $language; ?>" class="widefat" />
			            	</div>
			            	<?php $tabnumber++; ?>
			            <?php endforeach; ?>
					</div>
					
					<script type="text/javascript">
					jQuery(document).ready(function() {
						if (jQuery.isFunction(jQuery.fn.tabs)) {
							jQuery('#unsubscribealltexttabs').tabs();
						}
					});
					</script>
				<?php else : ?>
					<input class="widefat" type="text" id="unsubscribealltext" name="unsubscribealltext" value="<?php echo esc_attr(stripslashes($this -> get_option('unsubscribealltext'))); ?>" />
				<?php endif; ?>
				<span class="howto"><?php _e('Displays an unsubscribe link generated by <code>[wpmlunsubscribeall]</code> in content or template of newsletters.', $this -> plugin_name); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="unsubscribe_usernotification"><?php _e('User Notification Email', $this -> plugin_name); ?></label>
			<?php echo $Html -> help(sprintf(__('Turning this on will send a notification email to acknowledge the unsubscribe after they have unsubscribed. You can modify the email message under %s', $this -> plugin_name), '<a href="?page=' . $this -> sections -> settings_templates . '">' . __('System Emails', $this -> plugin_name) . '</a>')); ?></th>
			<td>
				<label><input <?php echo (!empty($unsubscribe_usernotification)) ? 'checked="checked"' : ''; ?> type="checkbox" name="unsubscribe_usernotification" value="1" id="unsubscribe_usernotification" /> <?php _e('Yes, send the user an unsubscribe confirmation email', $this -> plugin_name); ?></label>
				<span class="howto"><?php _e('Enable this to send the user/subscriber a "sorry to see you go..." email notification upon unsubscribe', $this -> plugin_name); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="unsubscribeconfirmation_Y"><?php _e('Unsubscribe Confirmation Screen', $this -> plugin_name); ?></label>
			<?php echo $Html -> help(__('This setting turns On/Off the unsubscribe confirmation screen which is a simple screen with checkboxes and a button so that subscribers can confirm their unsubscribe. It is considered a good feature since it will prevent invalid unsubscribes such as when an unsubscribe link is clicked by accident inside the email.', $this -> plugin_name)); ?></th>
			<td>
				<label><input onclick="jQuery('#unsubscribeconfirmationNdiv').hide();" <?php echo ($this -> get_option('unsubscribeconfirmation') == "Y") ? 'checked="checked"' : ''; ?> type="radio" name="unsubscribeconfirmation" value="Y" id="unsubscribeconfirmation_Y" /> <?php _e('On', $this -> plugin_name); ?></label>
				<label><input onclick="jQuery('#unsubscribeconfirmationNdiv').show();" <?php echo ($this -> get_option('unsubscribeconfirmation') == "N") ? 'checked="checked"' : ''; ?> type="radio" name="unsubscribeconfirmation" value="N" id="unsubscribeconfirmation_N" /> <?php _e('Off', $this -> plugin_name); ?></label>
				<span class="howto"><?php _e('Let subscribers confirm their unsubscribe. Turn this Off to unsubscribe immediately.', $this -> plugin_name); ?></span>
			</td>
		</tr>
	</tbody>
</table>

<div id="unsubscribeconfirmationNdiv" style="display:<?php echo ($this -> get_option('unsubscribeconfirmation') == "N") ? 'block' : 'none'; ?>;">
	<table class="form-table">
		<tbody>
			<tr>
				<th><label for="unsubscriberemoveallsubscriptions_N"><?php _e('Remove All Subscriptions', $this -> plugin_name); ?></label>
				<?php echo $Html -> help(__('By default, a subscriber will be unsubscribed from the list(s) to which the newsletter was sent in the first place. If you turn this setting on, the subscriber will be automatically unsubscribed from all possible list subscriptions that they have.', $this -> plugin_name)); ?></th>
				<td>
					<label><input <?php echo ($this -> get_option('unsubscriberemoveallsubscriptions') == "Y") ? 'checked="checked"' : ''; ?> type="radio" name="unsubscriberemoveallsubscriptions" value="Y" id="unsubscriberemoveallsubscriptions_Y" /> <?php _e('Yes', $this -> plugin_name); ?></label>
					<label><input <?php echo (!$this -> get_option('unsubscriberemoveallsubscriptions') || $this -> get_option('unsubscriberemoveallsubscriptions') == "N") ? 'checked="checked"' : ''; ?> type="radio" name="unsubscriberemoveallsubscriptions" value="N" id="unsubscriberemoveallsubscriptions_N" /> <?php _e('No', $this -> plugin_name); ?></label>
					<span class="howto"><?php _e('With no confirmation, the subscriber is unsubscribed from only the list(s) sent to. This setting will remove all subscriptions if turned on.', $this -> plugin_name); ?></span>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<table class="form-table">
	<tbody>
		<tr>
			<th><label for="unsubscribedelete_Y"><?php _e('Delete Subscriber on Unsubscribe', $this -> plugin_name); ?></label>
			<?php echo $Html -> help(__('A good setting to keep your subscribers database clean since it will delete a subscriber completely if the subscriber unsubscribes and has no subscriptions remaining.', $this -> plugin_name)); ?></th>
			<td>
				<label><input <?php echo ($this -> get_option('unsubscribedelete') == "Y") ? 'checked="checked"' : ''; ?> type="radio" name="unsubscribedelete" value="Y" id="unsubscribedelete_Y" /> <?php _e('Yes', $this -> plugin_name); ?></label>
				<label><input <?php echo ($this -> get_option('unsubscribedelete') == "N") ? 'checked="checked"' : ''; ?> type="radio" name="unsubscribedelete" value="N" id="unsubscribedelete_N" /> <?php _e('No', $this -> plugin_name); ?></label>
				<span class="howto"><?php _e('Turning this on will delete the subscriber record if no subscriptions remain on the record.', $this -> plugin_name); ?></span>
			</td>
		</tr>
		<tr>
			<th><?php _e('Admin Notification on Unsubscription', $this -> plugin_name); ?>
			<?php echo $Html -> help(__('Turn this on to let the system send the administrator an email notification when a subscriber unsubscribes. The notification is sent to the "Administrator Email" setting under Newsletters > Configuration > General > General Mail Settings.', $this -> plugin_name)); ?></th>
			<td>
				<?php $adminemailonunsubscription = $this -> get_option('adminemailonunsubscription'); ?>
				<label><input onclick="jQuery('#adminemailonunsubscribe_div').show();" <?php echo $check1 = ($adminemailonunsubscription == "Y") ? 'checked="checked"' : ''; ?> type="radio" name="adminemailonunsubscription" value="Y" /> <?php _e('On'); ?></label>
				<label><input onclick="jQuery('#adminemailonunsubscribe_div').hide();" <?php echo $check2 = ($adminemailonunsubscription == "N") ? 'checked="checked"' : ''; ?> type="radio" name="adminemailonunsubscription" value="N" /> <?php _e('Off'); ?></label>
				<span class="howto"><?php _e('Turn this on to receive a notification email on the administrator email each time someone unsubscribes.', $this -> plugin_name); ?></span>
			</td>
		</tr>
	</tbody>
</table>

<div id="adminemailonunsubscribe_div" style="display:<?php echo (!empty($adminemailonunsubscription) && $adminemailonunsubscription == "Y") ? 'block' : 'none'; ?>;">
	<table class="form-table">
		<tbody>
			<tr>
				<th><label for="unsubscribeemails_single"><?php _e('Unsubscribe Emails', $this -> plugin_name); ?></label>
				<?php echo $Html -> help(__('When a subscriber is subscribed to multiple mailing lists and they unsubcribe and the "Admin Notification on Unsubscription" setting above is turned on, the administrator is notified via email. This setting allows you to set whether you want the administrator to receive a single email for all the unsubscribes or multiple emails (one for each mailing list).', $this -> plugin_name)); ?></th>
				<td>
					<label><input <?php echo (!empty($unsubscribeemails) && $unsubscribeemails == "single") ? 'checked="checked"' : ''; ?> type="radio" name="unsubscribeemails" value="single" id="unsubscribeemails_single" /> <?php _e('Single Email', $this -> plugin_name); ?></label>
					<label><input <?php echo (!empty($unsubscribeemails) && $unsubscribeemails == "multiple") ? 'checked="checked"' : ''; ?> type="radio" name="unsubscribeemails" value="multiple" id="unsubscribeemails_multiple" /> <?php _e('Multiple Emails (One for each list)', $this -> plugin_name); ?></label>
					<span class="howto"><?php _e('Should the system send a single or multiple unsubscribe emails for an unsubscribe from multiple lists?', $this -> plugin_name); ?></span>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<table class="form-table">
	<tbody>
		<tr>
			<th><label for="unsubscribecommentsY"><?php _e('Unsubscribe Comments Box', $this -> plugin_name); ?></label>
			<?php echo $Html -> help(__('Do you want to allow your subscribers to enter an optional message/comments in the process of unsubscribing? If you turn this on, the message/comments will be sent through to you in the unsubscribe notification and it will also be saved to the database for viewing later on.', $this -> plugin_name)); ?></th>
			<td>
				<label><input <?php echo ($this -> get_option('unsubscribecomments') == "Y") ? 'checked="checked"' : ''; ?> type="radio" name="unsubscribecomments" value="Y" id="unsubscribecommentsY" /> <?php _e('On', $this -> plugin_name); ?></label>
				<label><input <?php echo ($this -> get_option('unsubscribecomments') == "N") ? 'checked="checked"' : ''; ?> type="radio" name="unsubscribecomments" value="N" id="unsubscribecommentsN" /> <?php _e('Off', $this -> plugin_name); ?></label>
				<span class="howto"><?php _e('Turn this on to show a comment box on the unsubscribe confirmation page to allow users to post feedback.', $this -> plugin_name); ?></span>
			</td>
		</tr>
	</tbody>
</table>