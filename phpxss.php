
<?php
function handleMessageSend(DB $database, string $messageId, string $senderEmail, string $messageContent): void {
  $database->save($messageId, $senderEmail, $messageContent);
}

function generateMessageHTML(DB $database, string $messageId): string {
  $messageContent = $database->load_content($messageId);
  return "<p class='messageContent'>{$messageContent}</p>";
}
?>
