<?php
$page_title = "OAuth 2.0 Password Grant Type";
$page_section = "";
$page_secondary = "";
$page_meta_description = "The OAuth 2.0 password grant type";
require('../../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Password</li>
    </ol>
  </nav>

  <div>

    <h2>OAuth 2.0 Password Grant</h2>

    <p><a href="https://tools.ietf.org/html/rfc6749#section-1.3.3" class="rfc">tools.ietf.org/html/rfc6749#section-1.3.3</a></p>

    <p>The Password grant type is a way to exchange a user's credentials for an access token. Because the client application has to collect the user's password and send it to the authorization server, it is not recommended that this grant be used at all anymore.</p>
    <p>This flow provides no mechanism for things like multifactor authentication or delegated accounts, so is quite limiting in practice.</p>
    <p>The latest <a href="https://tools.ietf.org/html/draft-ietf-oauth-security-topics-13#section-3.4">OAuth 2.0 Security Best Current Practice</a> disallows the password grant entirely.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/password-grant/">Password Grant</a> (oauth.com)</li>
        <li><a href="https://developer.okta.com/blog/2018/06/29/what-is-the-oauth2-password-grant">What is the OAuth 2.0 Password Grant Type?</a> (developer.okta.com)</li>
        <li><a href="https://tools.ietf.org/html/draft-ietf-oauth-security-topics-13#section-3.4">Section 3.4 of OAuth 2.0 Security Best Current Practice</a></li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#password">Password</a> (aaronparecki.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../../includes/_footer.php'); ?>
