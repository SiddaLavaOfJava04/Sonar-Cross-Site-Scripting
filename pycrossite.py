import database

def handle_message_send(message_id, sender_email, message_content):
    database.save(message_id, sender_email, message_content)

def generate_message_html(message_id):
    message_content = database.loadContent(message_id)
    return f'<p class="messageContent">{message_content}</p>'
