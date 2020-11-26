<?php
$orgs = [
  'hoc' => ['title' => 'the HOC Library', 'phone' => '15419188840', 'formatted_phone' => '541-918-8840', 'email' => 'miyagib@linnbenton.edu'],
  'circ' => ['title' => 'LBCC Library Circulation Services', 'phone' => '15419174638', 'formatted_phone' => '541-917-4638', 'email' => 'libcirc@linnbenton.edu'],
  'ref' => ['title' => 'a Librarian', 'phone' => '15419174645', 'formatted_phone' => '541-917-4645', 'email' => 'libref@linnbenton.edu'],
  'shd' => ['title' => 'the Student Help Desk', 'phone' => '15419174630', 'formatted_phone' => '541-917-4630', 'email' => 'student.helpdesk@linnbenton.edu'],
];
if ($this->_contact_type) {
  $org = $orgs[$this->_contact_type];
} else {
  $org = $orgs['ref'];
}
?>


<h2>Contact <?php echo $org['title'] ?></h2>
<a href="tel:<?php echo $org['phone'] ?>" class="contact-pluslet-link">
  <span class="fa fa-phone fa-2x maroon-background contact-circle"></span>
  Call: <?php echo $org['formatted_phone'] ?>
</a><br />
<?php if ('shd' === $this->_contact_type): ?>
  <a href="sms:15417047001" class="contact-pluslet-link">
    <span class="fa fa-mobile fa-2x yellow-background contact-circle"></span>
    Text: 541-704-7001
  </a>
<?php else: ?>
<a href="https://v2.libanswers.com/chati.php?hash=608b00394095f20b06021523d15418ff" class="contact-pluslet-link">
  <span class="fa fa-commenting fa-2x yellow-background contact-circle"></span>
  Chat
</a> (available 24/7)
<?php endif; ?>

<br />
<a href="mailto:<?php echo $org['email'] ?>" class="contact-pluslet-link">
  <span class="fa fa-envelope fa-2x green-background contact-circle"></span>
  Email: <?php echo $org['email'] ?>
</a>
<br />
<!--
<a href="https://linnbenton.zoom.us/j/243933025" class="contact-pluslet-link">
  <span class="fa fa-laptop fa-2x dark-blue-background contact-circle"></span>
  Zoom
</a>
<br />
-->
<?php if ('ref' === $this->_contact_type): ?>
  <a href="sms:16506676620" class="contact-pluslet-link">
    <span class="fa fa-mobile fa-2x maroon-background contact-circle"></span>
    Text: (650) 667-6620
  </a>
<?php endif; ?>

