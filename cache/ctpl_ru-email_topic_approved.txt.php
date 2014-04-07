<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Тема одобрена — «<?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?>»

Здравствуйте, <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>!

Вы получили это уведомление потому, что ваша тема «<?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?>» на конференции «<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>» была одобрена модератором или администратором.

Если вы хотите просмотреть тему, перейдите по следующей ссылке:
<?php echo (isset($this->_rootref['U_VIEW_TOPIC'])) ? $this->_rootref['U_VIEW_TOPIC'] : ''; ?>



<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>