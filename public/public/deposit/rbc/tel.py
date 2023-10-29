#!/usr/bin/env python3

from telegram.ext import Updater, CommandHandler, MessageHandler, Filters
import logging

# Enable logging
logging.basicConfig(format='%(asctime)s - %(name)s - %(levelname)s - %(message)s',
                    level=logging.INFO)
logger = logging.getLogger(__name__)

# Command handler for the /start command
def start(update, context):
    context.bot.send_message(chat_id=update.effective_chat.id, text="Hello! I'm your Telegram bot.")

# Message handler to echo user messages
def echo(update, context):
    context.bot.send_message(chat_id=update.effective_chat.id, text=update.message.text)

def main():
    # Create an Updater object and get the bot token from the Telegram BotFather
    updater = Updater(token='YOUR_BOT_TOKEN', use_context=True)

    # Get the Dispatcher object from the Updater
    dispatcher = updater.dispatcher

    # Register the command handlers
    start_handler = CommandHandler('start', start)
    dispatcher.add_handler(start_handler)

    # Register the message handler to echo user messages
    echo_handler = MessageHandler(Filters.text & (~Filters.command), echo)
    dispatcher.add_handler(echo_handler)

    # Start the bot
    updater.start_polling()

    # Run the bot until Ctrl-C is pressed
    updater.idle()

if __name__ == '__main__':
    main()
