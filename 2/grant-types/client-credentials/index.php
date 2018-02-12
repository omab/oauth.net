<?php
$page_title = "OAuth 2.0 Client Credentials";
$page_section = "";
$page_secondary = "";
$page_meta_description = "The OAuth 2.0 client credentials grant type";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Client Credentials</li>
    </ol>
  </nav>

  <div>

    <h2>OAuth 2.0 Client Credentials Grant</h2>

    <?php require('../../../includes/_carbon.php'); ?>

    <p><a href="https://tools.ietf.org/html/rfc6749#section-1.3.4" class="rfc">RFC 6749 §1.3.4</a></p>

    <p>The Client Credentials grant type is used by clients to obtain an access token outside of the context of a user.</p>
    <p>This is typically used by clients to access resources about themselves rather than to access a user's resources.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/client-credentials/">Client Credentials</a> (oauth.com)</li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#client-credentials">Application Access</a> (aaronparecki.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
