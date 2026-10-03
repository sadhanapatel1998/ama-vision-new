<?php require_once 'includes/data.php';
$sent = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $f = fn($k) => trim(strip_tags($_POST[$k] ?? ''));
  $name = $f('name'); $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL); $msg = $f('message');
  if (!empty($_POST['website'])) { $sent = true; } // honeypot
  elseif ($name && $email && $msg) {
    $body = "Name: $name\nCompany: {$f('company')}\nEmail: $email\nPhone: {$f('phone')}\nProject: {$f('type')}\nBudget: {$f('budget')}\nDate: {$f('date')}\nLocation: {$f('location')}\n\n$msg";
    $sent = @mail($site['email'], "New project enquiry — $name", $body, "From: noreply@{$_SERVER['HTTP_HOST']}\r\nReply-To: $email");
  } else $sent = false;
}
$title='Contact | AMA Vision — Start a Project'; include 'includes/header.php';
$heroTitle="Let's Build Something Great"; $crumb='Contact'; $heroSub='Tell us about your project, event or content need — our team will get back within 1–2 business days.'; $heroImg='lights'; include 'includes/page-hero.php'; ?>
<section class="section" id="contact"><div class="wrap">
  <div class="contact-grid">
    <div class="contact-info reveal">
      <p>Founder-led, accountable coordination — from the first conversation to the final frame.</p>
      <div class="contact-detail"><small>Founder</small><span>Aman Singh</span></div>
      <div class="contact-detail"><small>Email</small><a href="mailto:<?= $site['email'] ?>"><?= $site['email'] ?></a></div>
      <div class="contact-detail"><small>Phone</small><a href="tel:<?= preg_replace('/\s/','',$site['phone']) ?>"><?= $site['phone'] ?></a></div>
      <div class="contact-detail"><small>Base</small><span><?= $site['location'] ?></span></div>
      <div class="contact-detail"><small>Instagram</small><a href="<?= $site['instagram'] ?>" target="_blank" rel="noopener">@amavision</a></div>
    </div>
    <form class="reveal reveal-delay-1" method="post" action="contact.php">
      <?php if($sent===true): ?><div class="form-alert">Enquiry sent — thank you. Our team will be in touch shortly.</div>
      <?php elseif($sent===false): ?><div class="form-alert err">Please fill name, a valid email and your message — or email us directly.</div><?php endif; ?>
      <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
      <div class="form-row">
        <div class="field"><label for="fName">Name</label><input id="fName" name="name" type="text" required></div>
        <div class="field"><label for="fCompany">Company</label><input id="fCompany" name="company" type="text"></div>
      </div>
      <div class="form-row">
        <div class="field"><label for="fEmail">Email</label><input id="fEmail" name="email" type="email" required></div>
        <div class="field"><label for="fPhone">Phone</label><input id="fPhone" name="phone" type="tel"></div>
      </div>
      <div class="form-row">
        <div class="field"><label for="fType">Project type</label>
          <select id="fType" name="type"><?php foreach($SERVICES as $s): ?><option><?= $s[0] ?></option><?php endforeach; ?><option>Other</option></select></div>
        <div class="field"><label for="fBudget">Estimated budget</label><input id="fBudget" name="budget" type="text" placeholder="e.g. ₹5L – ₹10L"></div>
      </div>
      <div class="form-row">
        <div class="field"><label for="fDate">Event / project date</label><input id="fDate" name="date" type="date"></div>
        <div class="field"><label for="fLocation">Location</label><input id="fLocation" name="location" type="text"></div>
      </div>
      <div class="field" style="margin-bottom:26px;"><label for="fMsg">Tell us about your project</label><textarea id="fMsg" name="message" required></textarea></div>
      <button type="submit" class="btn btn-gold">Send project enquiry <span class="arrow">→</span></button>
    </form>
  </div>
</div></section>
<?php include 'includes/footer.php'; ?>
