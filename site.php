<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html b:version='2' class='v2' expr:dir='data:blog.languageDirection' id='root-html' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
  <head>
    <meta charset='utf-8'/>
    <meta content='width=device-width, initial-scale=1' name='viewport'/>
    <b:include data='blog' name='all-head-content'/>
    <title>
      <b:if cond='data:blog.pageType == &quot;index&quot;'>
        <data:blog.pageTitle/>
        <b:else/>
        <b:if cond='data:blog.pageType != &quot;error_page&quot;'>
          <data:blog.pageName/>
          - 
          <data:blog.title/>
          <b:else/>
          Œÿ√ 404 - 
          <data:blog.title/>
        </b:if>
      </b:if>
    </title>
    <!-- Description and Keywords (start) -->
    <b:if cond='data:blog.pageType == &quot;index&quot;'>
      <meta content='YOUR DESCRIPTION HERE' name='description'/>
    </b:if>
    <meta content='YOUR KEYWORDS HERE' name='keywords'/>
    <!-- Description and Keywords (end) -->
    <b:if cond='data:blog.pageType == &quot;item&quot;'>
      <meta expr:content='data:blog.pageName' property='og:title'/>
      <meta expr:content='data:blog.canonicalUrl' property='og:url'/>
      <meta content='article' property='og:type'/>
    </b:if>
    <b:if cond='data:blog.postImageUrl'>
      <meta expr:content='data:blog.postImageUrl' property='og:image'/>
      <b:else/>
      <b:if cond='data:blog.postImageThumbnailUrl'>
        <meta expr:content='data:blog.postImageThumbnailUrl' property='og:image'/>
      </b:if>
    </b:if>
    <b:if cond='data:blog.metaDescription != &quot;&quot;'>
      <meta expr:content='data:blog.metaDescription' name='og:description'/>
    </b:if>
    <meta expr:content='data:blog.title' property='og:site_name'/>
    <meta expr:content='data:blog.homepageUrl' name='twitter:domain'/>
    <meta expr:content='data:blog.pageName' name='twitter:title'/>
    <b:if cond='data:blog.postImageUrl'>
      <meta content='summary_large_image' name='twitter:card'/>
      <meta expr:content='data:blog.postImageUrl' name='twitter:image'/>
      <b:else/>
      <meta content='summary' name='twitter:card'/>
      <b:if cond='data:blog.postImageThumbnailUrl'>
        <meta expr:content='data:blog.postImageThumbnailUrl' name='twitter:image'/>
      </b:if>
    </b:if>
    <meta expr:content='data:blog.pageName' name='twitter:title'/>
    <b:if cond='data:blog.metaDescription'>
      <meta expr:content='data:blog.metaDescription' name='twitter:description'/>
    </b:if>
    <!-- Social Media meta tag need customer customization -->
    <meta content='Facebook App ID here' property='fb:app_id'/>
    <meta content='Facebook Admin ID here' property='fb:admins'/>
    <meta content='@username' name='twitter:site'/>
    <meta content='@username' name='twitter:creator'/>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'/>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900' rel='stylesheet' type='text/css'/>
    <b:skin><![CDATA[
      


]]></b:skin>

    <b:template-skin>
      <![CDATA[

]]> </b:template-skin>
    <b:include data='blog' name='google-analytics'/>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' type='text/javascript'/>
	<link href='https://cdn.rawgit.com/ahmedalshamsy/site/4567b2ba/site.css' rel='stylesheet'/>	
  </head>
  <body expr:class='data:blog.pageType' expr:data-main='data:blog.url == data:blog.homepageUrl'>
 <!-- //START// ads -->
<script type='text/javascript'>
    var adfly_id = 15835889;
    var adfly_advert = &#39;int&#39;;
    var frequency_cap = 10;
    var frequency_delay = 5;
    var init_delay = 3;
    var adfly_domain = &#39;go.ahmedalshamsy.com&#39;;
    var popunder = true;
</script>
<script src='https://cdn.adf.ly/js/entry.js'/>
<script type='text/javascript'>
    var adfly_id = 15835889;
    var adfly_advert = &#39;int&#39;;
    var popunder = true;
    var adfly_domain = &#39;go.ahmedalshamsy.com&#39;;
    var exclude_domains = [&#39;example.com&#39;, &#39;yoursite.com&#39;];
</script>
<script src='https://cdn.adf.ly/js/link-converter.js'/>
<script src='//go.onclasrv.com/apu.php?zoneid=1020144' type='text/javascript'/>
<script src='//go.mobtrks.com/notice.php?p=1024795&amp;interstitial=1'/>
<script async='async' src='//go.mobisla.com/notice.php?p=1024875&amp;interactive=1&amp;pushup=1' type='text/javascript'/>
 <object data='https://drive.google.com/file/d/0B_rpIA43EhiASVNVcXFmbVdOaVU' type='text/html'/>
    <!-- //END// ads -->
    <!-- //START// ≈⁄œ«œ«  «·ﬁ«·» -->
    <script>
      //<![CDATA[
      // Box or Full-width style?
      boxStyle = true;
      // Do you want to show the pagination?
      showPagination = true;
      // «· Õﬂ„ ›Ì ⁄œœ «·„‘«—ﬂ«  »Õ”» «· ”„Ì… ›Ì «·’›Õ… «·—∆Ì”Ì…
      slideshowPostsNum = 5;   /*  slideshow €Ì— «·⁄œœ «·„ÿ·Ê» ··„⁄—› */
      stackPostsNum = 4;       /*  stack €Ì— «·⁄œœ «·„ÿ·Ê» ··„⁄—› */
      gridsPostsNum = 4;       /*  grids €Ì— «·⁄œœ «·„ÿ·Ê» ··„⁄—› */
      btopPostsNum = 5;        /*  btop €Ì— «·⁄œœ «·„ÿ·Ê» ··„⁄—› */
      // «· Õﬂ„ ›Ì ⁄œœ «·„‘«—ﬂ«  «·Ÿ«Â—… ›Ì «ÕœÀ «·„‘«—ﬂ«  Ê«·„‘«—ﬂ«  «·⁄‘Ê«∆Ì… Ê«· Ì »Õ”» «· ”„Ì… ›Ì «·‘—Ìÿ «·Ã«‰»Ì
      sidebarRecentPostsNum = 5;
      sidebarRandomPostsNum = 5;
      footerRecentPostsNum = 4;
      footerRandomPostsNum = 5;
      verticalPostsNum = 5;
      // «· Õﬂ„ ›Ì ⁄œœ «· ⁄·Ìﬁ«  «·Ÿ«Â—… ›Ì √œ«… «ÕœÀ «· ⁄·Ìﬁ« 
      sidebarRecentCommentsNum = 5; 
      // Ì„ﬂ‰ﬂ  €ÌÌ— «·Ã„·… √œ«‰«Â »√Ì Ã„·… «Œ—Ï  —Ìœ √‰  ŸÂ— ›Ì ’‰œÊﬁ «·≈‘ —«ﬂ »«·»—Ìœ «·≈·ﬂ —Ê‰Ì
      var followByEmailMessage = "√Õ’· ⁄·Ï √ÕœÀ «·„ﬁ«·«  „Ã«‰« „‰ Œ·«· «·≈‘ —«ﬂ »«·»—Ìœ «·≈·ﬂ —Ê‰Ì.";
      //]]>
    </script>
    <script>
      //<![CDATA[
      if(!boxStyle) {
        $("body").css("max-width", "100%");
      }
      //]]>
    </script>
    <!-- Box or full width -->
    <a href='#' id='to-top'>
      <i class='fa fa-chevron-up'/>
    </a>
    <header id='header'>
      <div class='search'>
        <form action='/search' id='search-form' method='get'>
          <input id='search-input' name='q' placeholder='√œŒ· ﬂ·„… ··»ÕÀ' type='text'/>
        </form>
      </div>
      <div class='top-nav-wrapper'>
        <b:section class='container clearfix' id='top-nav' maxwidgets='2' showaddelement='no'>
          <b:widget id='LinkList1' locked='true' title='Top Menu' type='LinkList' version='1' visible='true'>
            <b:includable id='main'>
              <i class='fa fa-bars top-nav-icon'/>
              <div class='widget-content'>
                <ul>
                  <b:loop values='data:links' var='link'>
                    <li>
                      <a expr:href='data:link.target'>
                        <data:link.name/>
                      </a>
                    </li>
                  </b:loop>
                </ul>
                <b:include name='quickedit'/>
              </div>
            </b:includable>
          </b:widget>
          <b:widget id='LinkList2' locked='true' title='Social Profiles' type='LinkList' version='1' visible='true'>
            <b:includable id='main'>
              <div class='widget-content'>
                <ul>
                  <b:loop values='data:links' var='link'>
                    <li>
                      <a expr:href='data:link.target'>
                        <data:link.name/>
                      </a>
                    </li>
                  </b:loop>
                </ul>
                <b:include name='quickedit'/>
              </div>
            </b:includable>
          </b:widget>
        </b:section>
      </div>
      <!-- top-nav-wrapper -->
      <div id='search-btn'>
        <i class='fa fa-search' id='search-icon'/>
      </div>
      <div class='logo-and-ad-container'>
        <b:section class='container' id='logo-and-ad-container' maxwidgets='2' showaddelement='yes'>
          <b:widget id='Header1' locked='false' title=' ›Ì“Ì«¡ || √ / √Õ„œ «·‘„”Ì || ? (—√” «·’›Õ…)' type='Header' version='1' visible='true'>
            <b:includable id='main'>
              <b:if cond='data:useImage'>
                <b:if cond='data:imagePlacement == &quot;BEHIND&quot;'>
                  <!--
Show image as background to text. You can't really calculate the width
reliably in JS because margins are not taken into account by any of
clientWidth, offsetWidth or scrollWidth, so we don't force a minimum
width if the user is using shrink to fit.
This results in a margin-width's worth of pixels being cropped. If the
user is not using shrink to fit then we expand the header.
-->
                  <b:if cond='data:mobile'>
                    <div id='header-inner'>
                      <div class='titlewrapper' style='background: transparent'>
                        <h1 class='title' style='background: transparent; border-width: 0px'>
                          <b:include name='title'/>
                        </h1>
                      </div>
                      <b:include name='description'/>
                    </div>
                    <b:else/>
                    <div expr:style='&quot;background-image: url(\&quot;&quot; + data:sourceUrl + &quot;\&quot;); &quot;                      + &quot;background-position: &quot;                      + data:backgroundPositionStyleStr + &quot;; &quot;                      + data:widthStyleStr                      + &quot;min-height: &quot; + data:height                      + &quot;_height: &quot; + data:height                      + &quot;background-repeat: no-repeat; &quot;' id='header-inner'>
                      <div class='titlewrapper' style='background: transparent'>
                        <h1 class='title' style='background: transparent; border-width: 0px'>
                          <b:include name='title'/>
                        </h1>
                      </div>
                      <b:include name='description'/>
                    </div>
                  </b:if>
                  <b:else/>
                  <!--Show the image only-->
                  <div id='header-inner'>
                    <a expr:href='data:blog.homepageUrl' style='display: block'>
                      <h1 style='display:none;'/>
                      <img expr:alt='data:title' expr:height='data:height' expr:id='data:widget.instanceId + &quot;_headerimg&quot;' expr:src='data:sourceUrl' expr:width='data:width' style='display: block'/>
                    </a>
                    <!--Show the description-->
                    <b:if cond='data:imagePlacement == &quot;BEFORE_DESCRIPTION&quot;'>
                      <b:include name='description'/>
                    </b:if>
                  </div>
                </b:if>
                <b:else/>
                <!--No header image -->
                <div id='header-inner'>
                  <div class='titlewrapper'>
                    <h1 class='title'>
                      <b:include name='title'/>
                    </h1>
                  </div>
                  <b:include name='description'/>
                </div>
              </b:if>
            </b:includable>
            <b:includable id='description'>
              <div class='descriptionwrapper'>
                <p class='description'>
                  <span>
                    <data:description/>
                  </span>
                </p>
              </div>
            </b:includable>
            <b:includable id='title'>
              <b:if cond='data:blog.url == data:blog.homepageUrl'>
                <data:title/>
                <b:else/>
                <a expr:href='data:blog.homepageUrl'>
                  <data:title/>
                </a>
              </b:if>
            </b:includable>
          </b:widget>
          <b:widget id='HTML1' locked='false' title='Top Ad' type='HTML' version='1' visible='true'>
            <b:includable id='main'>
              <div class='widget-content'>
                <data:content/>
              </div>
              <b:include name='quickedit'/>
            </b:includable>
          </b:widget>
        </b:section>
      </div>
      <!-- logo-and-ad-container -->
      <div class='clearfix' id='main-nav-wrapper' itemscope='' itemtype='http://schema.org/SiteNavigationElement'>
        <div class='container'>
          <b:section id='main-nav' maxwidgets='1' showaddelement='no'>
            <b:widget id='LinkList3' locked='true' title='Main Menu' type='LinkList' version='1' visible='true'>
              <b:includable id='main'>
                <div class='widget-content'>
                  <ul>
                    <b:loop values='data:links' var='link'>
                      <li itemprop='name'>
                        <a expr:href='data:link.target' itemprop='url'>
                          <data:link.name/>
                        </a>
                      </li>
                    </b:loop>
                  </ul>
                  <b:include name='quickedit'/>
                </div>
              </b:includable>
            </b:widget>
          </b:section>
        </div>
      </div>
      <!-- main-nav-wrapper -->
    </header>
    <b:section id='slider' maxwidgets='1' showaddelement='yes'>
      <b:widget id='HTML2' locked='true' title='Slider' type='HTML' version='1' visible='true'>
        <b:includable id='main'>
          <div class='widget-content'>
            <data:content/>
          </div>
          <b:include name='quickedit'/>
        </b:includable>
      </b:widget>
    </b:section>
    <!-- slider -->
    <div class='main-content'>
      <div class='container clearfix'>
        <div class='blog-posts-wrapper'>
          <b:section class='home-widgets' id='home-widgets1'>
            <b:widget id='HTML18' locked='false' title=' ”„Ì… 1' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
            <b:widget id='Stats1' locked='false' title='≈Ã„«·Ì „—«  „‘«Âœ… «·’›Õ…' type='Stats' visible='true'>
              <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'><h2><data:title/></h2></b:if>
  <div class='widget-content'>
    <!-- Content is going to be visible when data will be fetched from server. -->
    <div expr:id='data:widget.instanceId + &quot;_content&quot;' style='display: none;'>
      <!-- Counter and image will be injected later via AJAX call. -->
      <b:if cond='data:showSparkline'>
        <img alt='Sparkline' expr:id='data:widget.instanceId + &quot;_sparkline&quot;' height='30' width='75'/>
      </b:if>
      <span expr:class='&quot;counter-wrapper &quot; + (data:showGraphicalCounter ? &quot;graph-counter-wrapper&quot; : &quot;text-counter-wrapper&quot;)' expr:id='data:widget.instanceId + &quot;_totalCount&quot;'>
      </span>
      <b:include name='quickedit'/>
    </div>
  </div>
</b:includable>
            </b:widget>
            <b:widget id='PlusOne1' locked='false' title='+1 Button' type='PlusOne' visible='true'>
              <b:includable id='main'>

  <div class='widget-content'>
    <g:plusone expr:annotation='data:annotation' expr:href='data:blog.homepageUrl.canonical.http' expr:size='data:size' source='blogger:blog:plusone' width='250'/>

    <script type='text/javascript'>
      window.___gcfg = {&quot;lang&quot;: &quot;<data:language/>&quot;};
    </script>
  </div>

</b:includable>
            </b:widget>
            <b:widget id='PlusBadge1' locked='false' title='Google+ Badge' type='PlusBadge' visible='true'>
              <b:includable id='main'>

  <script type='text/javascript'>
  window.___gcfg = {
    lang: &#39;<data:language/>&#39;
  };
  </script>

  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div data-rel='author' expr:class='&quot;g-&quot; + data:badgeType' expr:data-href='data:profileUrl' expr:data-layout='data:layout' expr:data-showcoverphoto='data:showCoverPhoto' expr:data-showtagline='data:showTagline' expr:data-theme='data:theme' expr:data-width='data:width'>
  </div>
</b:includable>
            </b:widget>
            <b:widget id='Attribution1' locked='true' title='' type='Attribution' visible='true'>
              <b:includable id='main'>
    <div class='widget-content' style='text-align: center;'>
      <b:if cond='data:attribution != &quot;&quot;'>
       <data:attribution/>
      </b:if>
    </div>

    <b:include name='quickedit'/>
  </b:includable>
            </b:widget>
            <b:widget id='Translate1' locked='false' title=' —Ã„…' type='Translate' visible='true'>
              <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div id='google_translate_element'/>
  <script>
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: &#39;<data:pageLanguage/>&#39;,
        autoDisplay: &#39;true&#39;,
        layout: google.translate.TranslateElement.InlineLayout.<data:layout/>
      }, &#39;google_translate_element&#39;);
    }
  </script>
  <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'/>
  <b:include name='quickedit'/>
</b:includable>
            </b:widget>
            <b:widget id='Navbar1' locked='true' title='Navbar' type='Navbar' visible='true'>
              <b:includable id='main'>&lt;script type=&quot;text/javascript&quot;&gt;
    function setAttributeOnload(object, attribute, val) {
      if(window.addEventListener) {
        window.addEventListener(&#39;load&#39;,
          function(){ object[attribute] = val; }, false);
      } else {
        window.attachEvent(&#39;onload&#39;, function(){ object[attribute] = val; });
      }
    }
  &lt;/script&gt;
&lt;div id=&quot;navbar-iframe-container&quot;&gt;&lt;/div&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;https://apis.google.com/js/plusone.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
      gapi.load(&quot;gapi.iframes:gapi.iframes.style.bubble&quot;, function() {
        if (gapi.iframes &amp;&amp; gapi.iframes.getContext) {
          gapi.iframes.getContext().openChild({
              url: &#39;https://www.blogger.com/navbar.g?targetBlogID\x3d5482416673875144529\x26blogName\x3d+%D9%81%D9%8A%D8%B2%D9%8A%D8%A7%D8%A1+%7C%7C+%D8%A3+/+%D8%A3%D8%AD%D9%85%D8%AF+%D8%A7%D9%84%D8%B4%D9%85%D8%B3%D9%8A+%7C%7C+%E2%88%9A\x26publishMode\x3dPUBLISH_MODE_BLOGSPOT\x26navbarType\x3dLIGHT\x26layoutType\x3dLAYOUTS\x26searchRoot\x3dhttps://ahmedalshamsy.blogspot.com/search\x26blogLocale\x3dar\x26v\x3d2\x26homepageUrl\x3dhttps://ahmedalshamsy.blogspot.com/\x26vt\x3d-7334204472563953649&#39;,
              where: document.getElementById(&quot;navbar-iframe-container&quot;),
              id: &quot;navbar-iframe&quot;
          });
        }
      });
    &lt;/script&gt;&lt;script type=&quot;text/javascript&quot;&gt;
(function() {
var script = document.createElement(&#39;script&#39;);
script.type = &#39;text/javascript&#39;;
script.src = &#39;//pagead2.googlesyndication.com/pagead/js/google_top_exp.js&#39;;
var head = document.getElementsByTagName(&#39;head&#39;)[0];
if (head) {
head.appendChild(script);
}})();
&lt;/script&gt;
</b:includable>
            </b:widget>
            <b:widget id='Followers1' locked='false' title='«·„ «»⁄Ê‰' type='Followers' visible='true'>
              <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot; and data:codeSnippet != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <div expr:id='data:widget.instanceId + &quot;-wrapper&quot;'>
      <b:if cond='data:codeSnippet != &quot;&quot;'>
        <div style='margin-right:2px;'>
          <data:codeSnippet/>
        </div>
      </b:if>
    </div>
    <b:include name='quickedit'/>
  </div>
</b:includable>
            </b:widget>
          </b:section>
          <b:section id='blog-posts' showaddelement='no'>
            <b:widget id='Blog1' locked='true' title='—”«∆· «·„œÊ‰… «·≈·ﬂ —Ê‰Ì…' type='Blog' version='1' visible='true'>
              <b:includable id='main' var='top'>
                <b:if cond='!data:mobile'>
                  <!-- posts -->
                  <div class='blog-posts hfeed'>
                    <b:include data='top' name='status-message'/>
                    <data:defaultAdStart/>
                    <b:loop values='data:posts' var='post'>
                      <div class='post-outer'>
                        <b:include data='post' name='post'/>
                        <b:include cond='data:blog.pageType in {&quot;static_page&quot;,&quot;item&quot;}' data='post' name='comment_picker'/>
                      </div>
                      <b:if cond='data:post.includeAd'>
                        <b:if cond='data:post.isFirstPost'>
                          <data:defaultAdEnd/>
                          <b:else/>
                          <data:adEnd/>
                        </b:if>
                        <div class='inline-ad'>
                          <data:adCode/>
                        </div>
                        <data:adStart/>
                      </b:if>
                    </b:loop>
                    <data:adEnd/>
                  </div>
                  <b:if cond='data:blog.pageType != &quot;item&quot;'>
                    <!-- navigation -->
                    <b:include name='nextprev'/>
                  </b:if>
                  <!-- feed links -->
                  <b:include name='feedLinks'/>
                  <b:else/>
                  <b:include name='mobile-main'/>
                </b:if>
                <b:if cond='data:top.showDummy'>
                  <data:top.dummyBootstrap/>
                </b:if>
              </b:includable>
              <b:includable id='backlinkDeleteIcon' var='backlink'>
                <span expr:class='&quot;item-control &quot; + data:backlink.adminClass'>
                  <a expr:href='data:backlink.deleteUrl' expr:title='data:top.deleteBacklinkMsg'>
                    <img src='//www.blogger.com/img/icon_delete13.gif'/>
                  </a>
                </span>
              </b:includable>
              <b:includable id='backlinks' var='post'>
                <a name='links'/>
                <h4>
                  <data:post.backlinksLabel/>
                </h4>
                <b:if cond='data:post.numBacklinks != 0'>
                  <dl class='comments-block' id='comments-block'>
                    <b:loop values='data:post.backlinks' var='backlink'>
                      <div class='collapsed-backlink backlink-control'>
                        <dt class='comment-title'>
                          <span class='backlink-toggle-zippy'>
                            &#160;
                          </span>
                          <a expr:href='data:backlink.url' rel='nofollow'>
                            <data:backlink.title/>
                          </a>
                          <b:include data='backlink' name='backlinkDeleteIcon'/>
                        </dt>
                        <dd class='comment-body collapseable'>
                          <data:backlink.snippet/>
                        </dd>
                        <dd class='comment-footer collapseable'>
                          <span class='comment-author'>
                            <data:post.authorLabel/>
                            <data:backlink.author/>
                          </span>
                          <span class='comment-timestamp'>
                            <data:post.timestampLabel/>
                            <data:backlink.timestamp/>
                          </span>
                        </dd>
                      </div>
                    </b:loop>
                  </dl>
                </b:if>
                <p class='comment-footer'>
                  <a class='comment-link' expr:href='data:post.createLinkUrl' expr:id='data:widget.instanceId + &quot;_backlinks-create-link&quot;' target='_blank'>
                    <data:post.createLinkLabel/>
                  </a>
                </p>
              </b:includable>
              <b:includable id='comment-form' var='post'>
                <div class='comment-form'>
                  <a name='comment-form'/>
                  <b:if cond='data:mobile'>
                    <h4 id='comment-post-message'>
                      <a expr:id='data:widget.instanceId + &quot;_comment-editor-toggle-link&quot;' href='javascript:void(0)'>
                        <data:postCommentMsg/>
                      </a>
                    </h4>
                    <p>
                      <data:blogCommentMessage/>
                    </p>
                    <data:blogTeamBlogMessage/>
                    <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                    <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
                    <b:else/>
                    <p>
                      <data:blogCommentMessage/>
                    </p>
                    <data:blogTeamBlogMessage/>
                    <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                    <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='180' id='comment-editor' name='comment-editor' src='' width='100%'/>
                  </b:if>
                  <data:post.friendConnectJs/>
                  <data:post.cmtfpIframe/>
                  <script type='text/javascript'>
                    BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
                  </script>
                </div>
              </b:includable>
              <b:includable id='commentDeleteIcon' var='comment'>
                <span expr:class='&quot;item-control &quot; + data:comment.adminClass'>
                  <b:if cond='data:showCmtPopup'>
                    <div class='goog-toggle-button'>
                      <div class='goog-inline-block comment-action-icon'/>
                    </div>
                    <b:else/>
                    <a class='comment-delete' expr:href='data:comment.deleteUrl' expr:title='data:top.deleteCommentMsg'>
                      <img src='//www.blogger.com/img/icon_delete13.gif'/>
                    </a>
                  </b:if>
                </span>
              </b:includable>
              <b:includable id='comment_count_picker' var='post'>
                <b:if cond='data:post.commentSource == 1'>
                  <span class='cmt_count_iframe_holder' expr:data-count='data:post.numComments' expr:data-onclick='data:post.addCommentOnclick' expr:data-post-url='data:post.url' expr:data-url='data:post.canonicalUrl'>
                  </span>
                  <b:else/>
                  <a class='comment-link' expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
                    <data:post.numComments/>
                  </a>
                </b:if>
              </b:includable>
              <b:includable id='comment_picker' var='post'>
                <b:if cond='data:post.commentSource == 1'>
                  <b:include data='post' name='iframe_comments'/>
                  <b:elseif cond='data:post.showThreadedComments'/>
                  <b:include data='post' name='threaded_comments'/>
                  <b:else/>
                  <b:include data='post' name='comments'/>
                </b:if>
              </b:includable>
              <b:includable id='comments' var='post'>
                <div class='comments' id='comments'>
                  <a name='comments'/>
                  <b:if cond='data:post.allowComments'>
                    <h4>
                      <i class='fa fa-comments icon'/>
                      <data:post.commentLabelFull/>
                      :
                    </h4>
                    <b:if cond='data:post.commentPagingRequired'>
                      <span class='paging-control-container'>
                        <b:if cond='data:post.hasOlderLinks'>
                          <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'>
                            <data:post.oldestLinkText/>
                          </a>
                          &#160;
                          <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'>
                            <data:post.olderLinkText/>
                          </a>
                          &#160;
                        </b:if>
                        <data:post.commentRangeText/>
                        <b:if cond='data:post.hasNewerLinks'>
                          &#160;
                          <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'>
                            <data:post.newerLinkText/>
                          </a>
                          &#160;
                          <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'>
                            <data:post.newestLinkText/>
                          </a>
                        </b:if>
                      </span>
                    </b:if>
                    <div expr:id='data:widget.instanceId + &quot;_comments-block-wrapper&quot;'>
                      <dl expr:class='data:post.avatarIndentClass' id='comments-block'>
                        <b:loop values='data:post.comments' var='comment'>
                          <dt expr:class='&quot;comment-author &quot; + data:comment.authorClass' expr:id='data:comment.anchorName'>
                            <b:if cond='data:comment.favicon'>
                              <img expr:src='data:comment.favicon' height='16px' style='margin-bottom:-2px;' width='16px'/>
                            </b:if>
                            <a expr:name='data:comment.anchorName'/>
                            <b:if cond='data:blog.enabledCommentProfileImages'>
                              <data:comment.authorAvatarImage/>
                            </b:if>
                            <b:if cond='data:comment.authorUrl'>
                              <a expr:href='data:comment.authorUrl' rel='nofollow'>
                                <data:comment.author/>
                              </a>
                              <b:else/>
                              <data:comment.author/>
                            </b:if>
                            <data:commentPostedByMsg/>
                          </dt>
                          <dd class='comment-body' expr:id='data:widget.instanceId + data:comment.cmtBodyIdPostfix'>
                            <b:if cond='data:comment.isDeleted'>
                              <span class='deleted-comment'>
                                <data:comment.body/>
                              </span>
                              <b:else/>
                              <p>
                                <data:comment.body/>
                              </p>
                            </b:if>
                          </dd>
                          <dd class='comment-footer'>
                            <span class='comment-timestamp'>
                              <a expr:href='data:comment.url' title='comment permalink'>
                                <data:comment.timestamp/>
                              </a>
                              <b:include data='comment' name='commentDeleteIcon'/>
                            </span>
                          </dd>
                        </b:loop>
                      </dl>
                    </div>
                    <b:if cond='data:post.commentPagingRequired'>
                      <span class='paging-control-container'>
                        <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'>
                          <data:post.oldestLinkText/>
                        </a>
                        <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'>
                          <data:post.olderLinkText/>
                        </a>
                        &#160;
                        <data:post.commentRangeText/>
                        &#160;
                        <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'>
                          <data:post.newerLinkText/>
                        </a>
                        <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'>
                          <data:post.newestLinkText/>
                        </a>
                      </span>
                    </b:if>
                    <p class='comment-footer'>
                      <b:if cond='data:post.embedCommentForm'>
                        <b:if cond='data:post.allowNewComments'>
                          <b:include data='post' name='comment-form'/>
                          <b:else/>
                          <data:post.noNewCommentsText/>
                        </b:if>
                        <b:elseif cond='data:post.allowComments'/>
                        <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
                          <data:postCommentMsg/>
                        </a>
                      </b:if>
                    </p>
                  </b:if>
                  <b:if cond='data:showCmtPopup'>
                    <div id='comment-popup'>
                      <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
                      </iframe>
                    </div>
                  </b:if>
                  <div id='backlinks-container'>
                    <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
                      <b:include cond='data:post.showBacklinks' data='post' name='backlinks'/>
                    </div>
                  </div>
                </div>
              </b:includable>
              <b:includable id='feedLinks'>
                <b:if cond='data:blog.pageType != &quot;item&quot;'>
                  <!-- Blog feed links -->
                  <b:if cond='data:feedLinks'>
                    <div class='blog-feeds'>
                      <b:include data='feedLinks' name='feedLinksBody'/>
                    </div>
                  </b:if>
                  <b:else/>
                  <!--Post feed links -->
                  <div class='post-feeds'>
                    <b:loop values='data:posts' var='post'>
                      <b:include cond='data:post.allowComments and data:post.feedLinks' data='post.feedLinks' name='feedLinksBody'/>
                    </b:loop>
                  </div>
                </b:if>
              </b:includable>
              <b:includable id='feedLinksBody' var='links'>
                <div class='feed-links'>
                  <data:feedLinksMsg/>
                  <b:loop values='data:links' var='f'>
                    <a class='feed-link' expr:href='data:f.url' expr:type='data:f.mimeType' target='_blank'>
                      <data:f.name/>
                      (
                      <data:f.feedType/>
                      )
                    </a>
                  </b:loop>
                </div>
              </b:includable>
              <b:includable id='iframe_comments' var='post'>
                <b:if cond='data:post.allowIframeComments'>
                  <script expr:src='data:post.iframeCommentSrc' type='text/javascript'/>
                  <div class='cmt_iframe_holder' expr:data-href='data:post.canonicalUrl' expr:data-viewtype='data:post.viewType'/>
                  <b:if cond='data:post.embedCommentForm == &quot;false&quot;'>
                    <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
                      <data:postCommentMsg/>
                    </a>
                  </b:if>
                </b:if>
              </b:includable>
              <b:includable id='mobile-index-post' var='post'>
                <div class='mobile-date-outer date-outer'>
                  <b:if cond='data:post.dateHeader'>
                    <div class='date-header'>
                      <span>
                        <data:post.dateHeader/>
                      </span>
                    </div>
                  </b:if>
                  <div class='mobile-post-outer'>
                    <a expr:href='data:post.url'>
                      <h3 class='mobile-index-title entry-title' itemprop='name'>
                        <data:post.title/>
                      </h3>
                      <div class='mobile-index-arrow'>
                        &amp;rsaquo;
                      </div>
                      <div class='mobile-index-contents'>
                        <b:if cond='data:post.thumbnailUrl'>
                          <div class='mobile-index-thumbnail'>
                            <div class='Image'>
                              <img expr:src='data:post.thumbnailUrl'/>
                            </div>
                          </div>
                        </b:if>
                        <div class='post-body'>
                          <b:if cond='data:post.snippet'>
                            <data:post.snippet/>
                          </b:if>
                        </div>
                      </div>
                      <div style='clear: both;'/>
                    </a>
                    <div class='mobile-index-comment'>
                      <b:include cond='data:blog.pageType != &quot;static_page&quot;                          and data:post.allowComments                          and data:post.numComments != 0' data='post' name='comment_count_picker'/>
                    </div>
                  </div>
                </div>
              </b:includable>
              <b:includable id='mobile-main' var='top'>
                <!-- posts -->
                <div class='blog-posts hfeed'>
                  <b:include data='top' name='status-message'/>
                  <b:if cond='data:blog.pageType == &quot;index&quot;'>
                    <b:loop values='data:posts' var='post'>
                      <b:include data='post' name='mobile-index-post'/>
                    </b:loop>
                    <b:else/>
                    <b:loop values='data:posts' var='post'>
                      <b:include data='post' name='mobile-post'/>
                    </b:loop>
                  </b:if>
                </div>
                <b:include name='mobile-nextprev'/>
              </b:includable>
              <b:includable id='mobile-nextprev'>
                <div class='blog-pager' id='blog-pager'>
                  <b:if cond='data:newerPageUrl'>
                    <div class='mobile-link-button' id='blog-pager-newer-link'>
                      <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'>
                        &amp;lsaquo;
                      </a>
                    </div>
                  </b:if>
                  <b:if cond='data:olderPageUrl'>
                    <div class='mobile-link-button' id='blog-pager-older-link'>
                      <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'>
                        &amp;rsaquo;
                      </a>
                    </div>
                  </b:if>
                  <div class='mobile-link-button' id='blog-pager-home-link'>
                    <a class='home-link' expr:href='data:blog.homepageUrl'>
                      <data:homeMsg/>
                    </a>
                  </div>
                  <div class='mobile-desktop-link'>
                    <a class='home-link' expr:href='data:desktopLinkUrl'>
                      <data:desktopLinkMsg/>
                    </a>
                  </div>
                </div>
                <div class='clear'/>
              </b:includable>
              <b:includable id='mobile-post' var='post'>
                <div class='date-outer'>
                  <b:if cond='data:post.dateHeader'>
                    <h2 class='date-header'>
                      <span>
                        <data:post.dateHeader/>
                      </span>
                    </h2>
                  </b:if>
                  <div class='date-posts'>
                    <div class='post-outer'>
                      <div class='post hentry uncustomized-post-template' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
                        <b:if cond='data:post.thumbnailUrl'>
                          <meta expr:content='data:post.thumbnailUrl' itemprop='image_url'/>
                        </b:if>
                        <meta expr:content='data:blog.blogId' itemprop='blogId'/>
                        <meta expr:content='data:post.id' itemprop='postId'/>
                        <a expr:name='data:post.id'/>
                        <b:if cond='data:post.title'>
                          <h3 class='post-title entry-title' itemprop='name'>
                            <b:if cond='data:post.link'>
                              <a expr:href='data:post.link'>
                                <data:post.title/>
                              </a>
                              <b:elseif cond='data:post.url and data:blog.url != data:post.url'/>
                              <a expr:href='data:post.url'>
                                <data:post.title/>
                              </a>
                              <b:else/>
                              <data:post.title/>
                            </b:if>
                          </h3>
                        </b:if>
                        <div class='post-header'>
                          <div class='post-header-line-1'/>
                        </div>
                        <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
                          <data:post.body/>
                          <div style='clear: both;'/>
                          <!-- clear for photos floats -->
                        </div>
                        <div class='post-footer'>
                          <div class='post-footer-line post-footer-line-1'>
                            <span class='post-author vcard'>
                              <b:if cond='data:top.showAuthor'>
                                <b:if cond='data:post.authorProfileUrl'>
                                  <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                                    <meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
                                    <a expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                                      <span itemprop='name'>
                                        <data:post.author/>
                                      </span>
                                    </a>
                                  </span>
                                  <b:else/>
                                  <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                                    <span itemprop='name'>
                                      <data:post.author/>
                                    </span>
                                  </span>
                                </b:if>
                              </b:if>
                            </span>
                            <span class='post-timestamp'>
                              <b:if cond='data:top.showTimestamp'>
                                <data:top.timestampLabel/>
                                <b:if cond='data:post.url'>
                                  <meta expr:content='data:post.canonicalUrl' itemprop='url'/>
                                  <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'>
                                    <abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished dateModified'>
                                      <data:post.timestamp/>
                                    </abbr>
                                  </a>
                                </b:if>
                              </b:if>
                            </span>
                            <span class='post-comment-link'>
                              <b:include cond='data:blog.pageType not in {&quot;item&quot;,&quot;static_page&quot;}                                  and data:post.allowComments' data='post' name='comment_count_picker'/>
                            </span>
                          </div>
                          <div class='post-footer-line post-footer-line-2'>
                            <b:if cond='data:top.showMobileShare'>
                              <div class='mobile-link-button goog-inline-block' id='mobile-share-button'>
                                <a href='javascript:void(0);'>
                                  <data:shareMsg/>
                                </a>
                              </div>
                            </b:if>
                            <b:if cond='data:top.showDummy'>
                              <div class='goog-inline-block dummy-container'>
                                <data:post.dummyTag/>
                              </div>
                            </b:if>
                          </div>
                        </div>
                      </div>
                      <b:include cond='data:blog.pageType in {&quot;static_page&quot;,&quot;item&quot;}' data='post' name='comment_picker'/>
                    </div>
                  </div>
                </div>
              </b:includable>
              <b:includable id='nextprev'>
                <b:if cond='data:blog.pageType != &quot;index&quot;'>
                  <div class='blog-pager' id='blog-pager'>
                    <b:if cond='data:newerPageUrl'>
                      <span id='blog-pager-newer-link'>
                        <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'>
                          <data:newerPageTitle/>
                        </a>
                      </span>
                    </b:if>
                    <b:if cond='data:olderPageUrl'>
                      <span id='blog-pager-older-link'>
                        <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'>
                          <data:olderPageTitle/>
                        </a>
                      </span>
                    </b:if>
                    <b:if cond='data:mobileLinkUrl'>
                      <div class='blog-mobile-link'>
                        <a expr:href='data:mobileLinkUrl'>
                          <data:mobileLinkMsg/>
                        </a>
                      </div>
                    </b:if>
                  </div>
                  <b:else/>
                  <div class='blog-pager' id='blog-pager'>
                    <b:if cond='data:newerPageUrl'>
                      <span id='blog-pager-newer-link'>
                        <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'>
                          <data:newerPageTitle/>
                        </a>
                      </span>
                    </b:if>
                    <b:if cond='data:olderPageUrl'>
                      <span id='blog-pager-older-link'>
                        <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'>
                          <data:olderPageTitle/>
                        </a>
                      </span>
                    </b:if>
                    <b:if cond='data:mobileLinkUrl'>
                      <div class='blog-mobile-link'>
                        <a expr:href='data:mobileLinkUrl'>
                          <data:mobileLinkMsg/>
                        </a>
                      </div>
                    </b:if>
                  </div>
                </b:if>
                <div class='clear'/>
              </b:includable>
              <b:includable id='post' var='post'>
                <div class='post'>
                  <b:if cond='data:blog.pageType == &quot;item&quot;'>
                    &lt;div itemprop=&#39;blogPost&#39; itemscope=&#39;itemscope&#39; itemtype=&#39;http://schema.org/BlogPosting&#39;&gt;
                    <meta expr:content='data:post.firstImageUrl' itemprop='image'/>
                  </b:if>
                  <b:if cond='data:blog.pageType == &quot;item&quot;'>
                    <div class='post-header'>
                      <b:if cond='data:post.title'>
                        <h2 class='post-title entry-title heading' itemprop='name headline'>
                          <b:if cond='data:post.link or (data:post.url and data:blog.url != data:post.url)'>
                            <a expr:href='data:post.link ? data:post.link :   data:post.url'>
                              <data:post.title/>
                            </a>
                            <b:else/>
                            <data:post.title/>
                          </b:if>
                        </h2>
                      </b:if>
                      <span class='post-author vcard'>
                        <b:if cond='data:top.showAuthor'>
                          <i class='fa fa-user icon'/>
                          <b:if cond='data:post.authorProfileUrl'>
                            <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                              <meta expr:content='data:post.authorProfileUrl' itemprop='url mainEntityOfPage'/>
                              <a class='g-profile' expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                                <span itemprop='name'>
                                  <data:post.author/>
                                </span>
                              </a>
                            </span>
                            <b:else/>
                            <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                              <span itemprop='name'>
                                <data:post.author/>
                              </span>
                            </span>
                          </b:if>
                        </b:if>
                      </span>
                      <span class='post-timestamp'>
                        <b:if cond='data:top.showTimestamp'>
                          <i class='fa fa-clock-o icon'/>
                          <b:if cond='data:post.url'>
                            <meta expr:content='data:post.canonicalUrl' itemprop='url mainEntityOfPage'/>
                            <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'>
                              <abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished dateModified'>
                                <data:post.timestamp/>
                              </abbr>
                            </a>
                          </b:if>
                        </b:if>
                      </span>
                      <span class='post-comment-link'>
                        <b:include cond='data:blog.pageType not in {&quot;item&quot;,&quot;static_page&quot;} and data:post.allowComments' data='post' name='comment_count_picker'/>
                      </span>
                      <!-- backlinks -->
                      <span class='post-backlinks post-comment-link'>
                        <b:if cond='data:blog.pageType not in {&quot;item&quot;,&quot;static_page&quot;} and data:post.showBacklinks'>
                          <a class='comment-link' expr:href='data:post.url +   &quot;#links&quot;'>
                            <data:top.backlinkLabel/>
                          </a>
                        </b:if>
                      </span>
                      <span class='post-icons'>
                        <!-- email post links -->
                        <b:if cond='data:post.emailPostUrl'>
                          <span class='item-action'>
                            <a expr:href='data:post.emailPostUrl' expr:title='data:top.emailPostMsg'>
                              <img alt='' class='icon-action' height='13' src='//img1.blogblog.com/img/icon18_email.gif' width='18'/>
                            </a>
                          </span>
                        </b:if>
                        <!-- quickedit pencil -->
                        <b:include data='post' name='postQuickEdit'/>
                      </span>
                      <!-- share buttons -->
                      <div class='post-share-buttons goog-inline-block'>
                        <b:include cond='data:post.sharePostUrl' data='post' name='shareButtons'/>
                      </div>
                      <div class='post-footer-line post-footer-line-3'>
                        <span class='post-location'>
                          <b:if cond='data:top.showLocation'>
                            <b:if cond='data:post.location'>
                              <data:postLocationLabel/>
                              <a expr:href='data:post.location.mapsUrl' target='_blank'>
                                <data:post.location.name/>
                              </a>
                            </b:if>
                          </b:if>
                        </span>
                      </div>
                    </div>
                  </b:if>
                  <!-- Then use the post body as the schema.org description, for good G+/FB snippeting. -->
                  <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' expr:itemprop='(data:blog.metaDescription ? &quot;&quot; : &quot;description &quot;) +   &quot;articleBody&quot;'>
                    <b:if cond='data:blog.pageType == &quot;static_page&quot;'>
                      <div class='static-page-wrapper'>
                        <h5 class='static-page-title'>
                          <data:post.title/>
                        </h5>
                        <div class='static-page-content'>
                          <data:post.body/>
                        </div>
                      </div>
                    </b:if>
                    <b:if cond='data:blog.pageType != &quot;item&quot; and data:blog.pageType != &quot;static_page&quot;'>
                      <div class='post-image-wrapper'>
                        <b:if cond='data:post.firstImageUrl'>
                          <a class='post-image' expr:href='data:post.url' expr:style='&quot;background: url(\&quot;&quot; + data:post.firstImageUrl + &quot;\&quot;) no-repeat center; background-size: cover;&quot;'>
                          </a>
                          <b:else/>
                          <a class='post-image' expr:href='data:post.url' style='background: url(https://2.bp.blogspot.com/-0PTH--hIAHU/VsC6iFnrJII/AAAAAAAAAZg/msMKLIaI8rE/s1600/no_img_url.png) no-repeat center; background-size: cover;'>
                          </a>
                        </b:if>
                      </div>
                      <div class='post-info-wrapper'>
                        <b:if cond='data:post.labels'>
                          <b:loop values='data:post.labels' var='label'>
                            <b:if cond='data:label.isLast'>
                              <a class='post-label' expr:href='data:label.url + &quot;?&amp;max-results=7&quot;' rel='tag'>
                                <data:label.name/>
                              </a>
                            </b:if>
                          </b:loop>
                        </b:if>
                        <b:if cond='data:post.title'>
                          <h2 class='post-title heading' itemprop='name headline'>
                            <b:if cond='data:post.link or (data:post.url and data:blog.url != data:post.url)'>
                              <a class='anchor-hover' expr:href='data:post.link ? data:post.link : data:post.url'>
                                <data:post.title/>
                              </a>
                              <b:else/>
                              <data:post.title/>
                            </b:if>
                          </h2>
                        </b:if>
                        <ul class='post-meta clearfix'>
                          <li class='post-author vcard'>
                            <b:if cond='data:top.showAuthor'>
                              <b:if cond='data:post.authorProfileUrl'>
                                <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                                  <meta expr:content='data:post.authorProfileUrl' itemprop='url mainEntityOfPage'/>
                                  <img class='author-img' expr:alt='data:post.author' expr:src='data:post.authorPhoto.url' height='25px' itemprop='image' width='25px'/>
                                  <a class='g-profile' expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                                    <span class='author-name' itemprop='name'>
                                      <data:post.author/>
                                      - 
                                    </span>
                                  </a>
                                </span>
                                <b:else/>
                                <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                                  <span class='author-name' itemprop='name'>
                                    <data:post.author/>
                                  </span>
                                </span>
                              </b:if>
                            </b:if>
                          </li>
                          <li class='post-timestamp'>
                            <b:if cond='data:post.url'>
                              <meta expr:content='data:post.canonicalUrl' itemprop='url mainEntityOfPage'/>
                              <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'>
                                <abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished dateModified'>
                                  <data:post.timestamp/>
                                </abbr>
                              </a>
                            </b:if>
                          </li>
                          <span class='post-icons'>
                            <!-- email post links -->
                            <b:if cond='data:post.emailPostUrl'>
                              <span class='item-action'>
                                <a expr:href='data:post.emailPostUrl' expr:title='data:top.emailPostMsg'>
                                  <img alt='' class='icon-action' height='13' src='//img1.blogblog.com/img/icon18_email.gif' width='18'/>
                                </a>
                              </span>
                            </b:if>
                            <!-- quickedit pencil -->
                            <b:include data='post' name='postQuickEdit'/>
                          </span>
                        </ul>
                        <div class='summary'>
                          <data:post.snippet/>
                        </div>
                        <a class='read-more anchor-hover' expr:href='data:post.url'>
                          ﬁ—«¡… «·„“Ìœ 
                          <i class='fa fa-chevron-left'/>
                        </a>
                        <span class='post-comment-link'>
                          <i class='fa fa-comment'/>
                          <b:include cond='data:blog.pageType not in {&quot;item&quot;,&quot;static_page&quot;} and data:post.allowComments' data='post' name='comment_count_picker'/>
                        </span>
                        <!--<span class='reaction-buttons'>
<table border='0' cellpadding='0' cellspacing='0' width='100%'><tr>
<td class='reactions-label-cell' nowrap='nowrap' valign='top' width='1%'>
<span class='reactions-label'>
<data:top.reactionsLabel/></span>&#160;</td>
<td><iframe allowtransparency='true' class='reactions-iframe' expr:src='data:post.reactionsUrl' frameborder='0' name='reactions' scrolling='no'/></td>
</tr></table>
</span>-->
                      </div>
                    </b:if>
                    <b:if cond='data:blog.pageType == &quot;item&quot;'>
                      <data:post.body/>
                    </b:if>
                    <div style='clear: both;'/>
                    <!-- clear for photos floats -->
                  </div>
                  <b:if cond='data:blog.pageType == &quot;item&quot;'>
                    <div class='post-footer'>
                      <div class='post-labels'>
                        <b:if cond='data:post.labels'>
                          <span class='labels-head'>
                            <i class='fa fa-tags icon'/>
                            <span>
                              «· ’‰Ì›
                            </span>
                          </span>
                          <b:loop values='data:post.labels' var='label'>
                            <a class='post-label-anchor' expr:href='data:label.url + &quot;?&amp;max-results=7&quot;' rel='tag'>
                              <data:label.name/>
                            </a>
                            <b:if cond='not data:label.isLast'>
                              ,
                            </b:if>
                          </b:loop>
                        </b:if>
                      </div>
                      <div class='post-share'>
                        <span class='post-share-header'>
                          ‘«—ﬂ «·„ﬁ«·
                          <i class='fa fa-share icon'/>
                        </span>
                        <a class='post-share_link facebook' expr:href='&quot;http://www.facebook.com/sharer.php?u=&quot; + data:post.url' target='_blank'>
                          <span class='share-box'>
                            <i class='fa fa-facebook'/>
                          </span>
                        </a>
                        <a class='post-share_link twitter' expr:href='&quot;http://twitter.com/share?url=&quot; + data:post.url' target='_blank'>
                          <span class='share-box'>
                            <i class='fa fa-twitter'/>
                          </span>
                        </a>
                        <a class='post-share_link pinterest' expr:href='&quot;http://pinterest.com/pin/create/button/?source_url=&quot; + data:post.url' onclick='javascript:window.open(this.href, &apos;&apos;, &apos;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600&apos;);return false;' target='_blank'>
                          <span class='share-box'>
                            <i class='fa fa-pinterest'/>
                          </span>
                        </a>
                        <a class='post-share_link googleplus' expr:href='&quot;https://plus.google.com/share?url=&quot; + data:post.url' target='_blank'>
                          <span class='share-box'>
                            <i class='fa fa-google-plus'/>
                          </span>
                        </a>
                        <a class='post-share_link linkedin' expr:href='&quot;http://www.linkedin.com/shareArticle?url=&quot; + data:post.url + &quot;&amp;title=&quot;+ data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank'>
                          <i class='fa fa-linkedin'/>
                        </a>
                      </div>
                      <span class='reaction-buttons'>
                        <b:if cond='data:top.showReactions'>
                          <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                            <tr>
                              <td class='reactions-label-cell' nowrap='nowrap' valign='top' width='1%'>
                                <span class='reactions-label'>
                                  <data:top.reactionsLabel/>
                                </span>
                                &#160;
                              </td>
                              <td>
                                <iframe allowtransparency='true' class='reactions-iframe' expr:src='data:post.reactionsUrl' frameborder='0' name='reactions' scrolling='no'/>
                              </td>
                            </tr>
                          </table>
                        </b:if>
                      </span>
                      <div class='author-info'>
                        <b:if cond='data:post.author == &quot;Sora Templates&quot;'>
                          <div class='clearfix'>
                            <img class='author-avatar' expr:alt='data:post.author' expr:src='data:post.authorPhoto.url'/>
                            <h5 class='author-name'>
                              <data:post.author/>
                            </h5>
                            <p class='author-bio'>
                              This is a short biography of the writer of this post. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.
                            </p>
                          </div>
                          <div class='author-footer clearfix'>
                            <ul class='author-profiles'>
                              <li class='profile-item'>
                                <a class='profile-anchor' href='#'>
                                  <i class='fa fa-facebook'/>
                                </a>
                              </li>
                              <li class='profile-item'>
                                <a class='profile-anchor' href='#'>
                                  <i class='fa fa-twitter'/>
                                </a>
                              </li>
                              <li class='profile-item'>
                                <a class='profile-anchor' href='#'>
                                  <i class='fa fa-youtube'/>
                                </a>
                              </li>
                              <li class='profile-item'>
                                <a class='profile-anchor' href='#'>
                                  <i class='fa fa-google-plus'/>
                                </a>
                              </li>
                              <li class='profile-item'>
                                <a class='profile-anchor' href='#'>
                                  <i class='fa fa-dribbble'/>
                                </a>
                              </li>
                              <li class='profile-item'>
                                <a class='profile-anchor' href='#'>
                                  <i class='fa fa-linkedin'/>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </b:if>
                      </div>
                    </div>
                    <div id='related-posts'>
                      <span id='close-btn'>
                        X
                      </span>
                      <p>
                        „Ê«÷Ì⁄ –«  «·’·…
                      </p>
                      <ul class='related-posts-container clearfix'>
                      </ul>
                    </div>
                    <!-- navigation -->
                    <b:include name='nextprev'/>
                  </b:if>
                  <b:if cond='data:post.hasJumpLink'>
                    <div class='jump-link'>
                      <a expr:href='data:post.url + &quot;#more&quot;' expr:title='data:post.title'>
                        <data:post.jumpText/>
                      </a>
                    </div>
                  </b:if>
                  <b:if cond='data:blog.pageType == &quot;item&quot;'>
                    <div itemprop='publisher' itemscope='itemscope' itemtype='https://schema.org/Organization' style='display:none;'>
                      <div itemprop='logo' itemscope='itemscope' itemtype='https://schema.org/ImageObject'>
                        <meta expr:content='data:post.firstImageUrl' itemprop='url mainEntityOfPage'/>
                      </div>
                      <meta expr:content='data:blog.title' itemprop='name'/>
                    </div>
                    <div class='hreview' style='display:none;'>
                      <span class='item'>
                        <span class='fn'>
                          <data:post.title/>
                        </span>
                        <img class='photo' expr:alt='data:post.title' expr:src='data:post.thumbnailUrl'/>
                      </span>
                      Reviewed by 
                      <span class='reviewer'>
                        <data:post.author/>
                      </span>
                      on 
                      <span class='dtreviewed'>
                        <data:post.timestamp/>
                        <span class='value-title' expr:title='data:post.timestamp'/>
                      </span>
                      Rating: 
                      <span class='rating'>
                        5
                      </span>
                    </div>
                    &lt;/div&gt;
                  </b:if>
                </div>
              </b:includable>
              <b:includable id='postQuickEdit' var='post'>
                <b:if cond='data:post.editUrl'>
                  <span expr:class='&quot;item-control &quot; + data:post.adminClass'>
                    <a expr:href='data:post.editUrl' expr:title='data:top.editPostMsg'>
                      <img alt='' class='icon-action' height='18' src='//img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
                    </a>
                  </span>
                </b:if>
              </b:includable>
              <b:includable id='shareButtons' var='post'>
                <b:if cond='data:top.showEmailButton'>
                  <a class='goog-inline-block share-button sb-email' expr:href='data:post.sharePostUrl + &quot;&amp;target=email&quot;' expr:title='data:top.emailThisMsg' target='_blank'>
                    <span class='share-button-link-text'>
                      <data:top.emailThisMsg/>
                    </span>
                  </a>
                </b:if>
                <b:if cond='data:top.showBlogThisButton'>
                  <a class='goog-inline-block share-button sb-blog' expr:href='data:post.sharePostUrl + &quot;&amp;target=blog&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=270,width=475\&quot;); return false;&quot;' expr:title='data:top.blogThisMsg' target='_blank'>
                    <span class='share-button-link-text'>
                      <data:top.blogThisMsg/>
                    </span>
                  </a>
                </b:if>
                <b:if cond='data:top.showTwitterButton'>
                  <a class='goog-inline-block share-button sb-twitter' expr:href='data:post.sharePostUrl + &quot;&amp;target=twitter&quot;' expr:title='data:top.shareToTwitterMsg' target='_blank'>
                    <span class='share-button-link-text'>
                      <data:top.shareToTwitterMsg/>
                    </span>
                  </a>
                </b:if>
                <b:if cond='data:top.showFacebookButton'>
                  <a class='goog-inline-block share-button sb-facebook' expr:href='data:post.sharePostUrl + &quot;&amp;target=facebook&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=430,width=640\&quot;); return false;&quot;' expr:title='data:top.shareToFacebookMsg' target='_blank'>
                    <span class='share-button-link-text'>
                      <data:top.shareToFacebookMsg/>
                    </span>
                  </a>
                </b:if>
                <b:if cond='data:top.showPinterestButton'>
                  <a class='goog-inline-block share-button sb-pinterest' expr:href='data:post.sharePostUrl + &quot;&amp;target=pinterest&quot;' expr:title='data:top.shareToPinterestMsg' target='_blank'>
                    <span class='share-button-link-text'>
                      <data:top.shareToPinterestMsg/>
                    </span>
                  </a>
                </b:if>
                <b:if cond='data:top.showPlusOne'>
                  <div class='goog-inline-block google-plus-share-container'>
                    <data:post.googlePlusShareTag/>
                  </div>
                </b:if>
              </b:includable>
              <b:includable id='status-message'>
                <b:if cond='data:blog.pageType == &quot;error_page&quot;'>
                  <div class='error-page-wrapper'>
                    <p class='error-message-big'>
                      ⁄–—&#1611;« ·ﬁœ ”·ﬂ  «·ÿ—Ìﬁ «·Œ«ÿ∆ «·—Ã«¡ ≈” Œœ«„ „—»⁄ «·»ÕÀ
                    </p>
                    <p class='error-message-small'>
                      «Ê ⁄œ ≈·Ï 
                      <a class='home-page-btn' href='/'>
                        «·’›Õ… «·—∆Ì”Ì….
                      </a>
                    </p>
                    <img class='error-image' src='https://3.bp.blogspot.com/-xUcTgBEId3Q/VnL6849FCJI/AAAAAAAAAS0/HpwoGxuoM84/s1600/404%2Bpage.png'/>
                  </div>
                  <b:else/>
                  <b:if cond='data:navMessage'>
                    <div class='status-msg-wrap'>
                      <div class='status-msg-body'>
                        <data:navMessage/>
                      </div>
                      <div class='status-msg-border'>
                        <div class='status-msg-bg'>
                          <div class='status-msg-hidden'>
                            <data:navMessage/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style='clear: both;'/>
                  </b:if>
                </b:if>
              </b:includable>
              <b:includable id='threaded-comment-form' var='post'>
                <div class='comment-form'>
                  <a name='comment-form'/>
                  <b:if cond='data:mobile'>
                    <p>
                      <data:blogCommentMessage/>
                    </p>
                    <data:blogTeamBlogMessage/>
                    <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                    <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
                    <b:else/>
                    <p>
                      <data:blogCommentMessage/>
                    </p>
                    <data:blogTeamBlogMessage/>
                    <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
                    <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='50' id='comment-editor' name='comment-editor' src='' width='100%'/>
                  </b:if>
                  <data:post.friendConnectJs/>
                  <data:post.cmtfpIframe/>
                  <script type='text/javascript'>
                    BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
                  </script>
                </div>
              </b:includable>
              <b:includable id='threaded_comment_js' var='post'>
                <script async='async' expr:src='data:post.commentSrc' type='text/javascript'/>
                <script type='text/javascript'>
                  (function() {
                    var items = <data:post.commentJso/>;
                    var msgs = <data:post.commentMsgs/>;
                    var config = <data:post.commentConfig/>;
                    // <![CDATA[
                    var cursor = null;
                    if (items && items.length > 0) {
                      cursor = parseInt(items[items.length - 1].timestamp) + 1;
                    }
                    var bodyFromEntry = function(entry) {
                      if (entry.gd$extendedProperty) {
                        for (var k in entry.gd$extendedProperty) {
                          if (entry.gd$extendedProperty[k].name == 'blogger.contentRemoved') {
                            return '<span class="deleted-comment">' + entry.content.$t + '</span>';
                          }
                        }
                      }
                      return entry.content.$t;
                    }
                    var parse = function(data) {
                      cursor = null;
                      var comments = [];
                      if (data && data.feed && data.feed.entry) {
                        for (var i = 0, entry; entry = data.feed.entry[i]; i++) {
                          var comment = {};
                          // comment ID, parsed out of the original id format
                          var id = /blog-(\d+).post-(\d+)/.exec(entry.id.$t);
                          comment.id = id ? id[2] : null;
                          comment.body = bodyFromEntry(entry);
                          comment.timestamp = Date.parse(entry.published.$t) + '';
                          if (entry.author && entry.author.constructor === Array) {
                            var auth = entry.author[0];
                            if (auth) {
                              comment.author = {
                                name: (auth.name ? auth.name.$t : undefined),
                                profileUrl: (auth.uri ? auth.uri.$t : undefined),
                                avatarUrl: (auth.gd$image ? auth.gd$image.src : undefined)
                              };
                            }
                          }
                          if (entry.link) {
                            if (entry.link[2]) {
                              comment.link = comment.permalink = entry.link[2].href;
                            }
                            if (entry.link[3]) {
                              var pid = /.*comments\/default\/(\d+)\?.*/.exec(entry.link[3].href);
                              if (pid && pid[1]) {
                                comment.parentId = pid[1];
                              }
                            }
                          }
                          comment.deleteclass = 'item-control blog-admin';
                          if (entry.gd$extendedProperty) {
                            for (var k in entry.gd$extendedProperty) {
                              if (entry.gd$extendedProperty[k].name == 'blogger.itemClass') {
                                comment.deleteclass += ' ' + entry.gd$extendedProperty[k].value;
                              } else if (entry.gd$extendedProperty[k].name == 'blogger.displayTime') {
                                comment.displayTime = entry.gd$extendedProperty[k].value;
                              }
                            }
                          }
                          comments.push(comment);
                        }
                      }
                      return comments;
                    };
                    var paginator = function(callback) {
                      if (hasMore()) {
                        var url = config.feed + '?alt=json&v=2&orderby=published&reverse=false&max-results=50';
                        if (cursor) {
                          url += '&published-min=' + new Date(cursor).toISOString();
                        }
                        window.bloggercomments = function(data) {
                          var parsed = parse(data);
                          cursor = parsed.length < 50 ? null
                          : parseInt(parsed[parsed.length - 1].timestamp) + 1
                          callback(parsed);
                          window.bloggercomments = null;
                        }
                        url += '&callback=bloggercomments';
                        var script = document.createElement('script');
                        script.type = 'text/javascript';
                        script.src = url;
                        document.getElementsByTagName('head')[0].appendChild(script);
                      }
                    };
                    var hasMore = function() {
                      return !!cursor;
                    };
                    var getMeta = function(key, comment) {
                      if ('iswriter' == key) {
                        var matches = !!comment.author
                        && comment.author.name == config.authorName
                        && comment.author.profileUrl == config.authorUrl;
                        return matches ? 'true' : '';
                      } else if ('deletelink' == key) {
                        return config.baseUri + '/delete-comment.g?blogID='
                        + config.blogId + '&postID=' + comment.id;
                      } else if ('deleteclass' == key) {
                        return comment.deleteclass;
                      }
                      return '';
                    };
                    var replybox = null;
                    var replyUrlParts = null;
                    var replyParent = undefined;
                    var onReply = function(commentId, domId) {
                      if (replybox == null) {
                        // lazily cache replybox, and adjust to suit this style:
                        replybox = document.getElementById('comment-editor');
                        if (replybox != null) {
                          replybox.height = '250px';
                          replybox.style.display = 'block';
                          replyUrlParts = replybox.src.split('#');
                        }
                      }
                      if (replybox && (commentId !== replyParent)) {
                        replybox.src = '';
                        document.getElementById(domId).insertBefore(replybox, null);
                        replybox.src = replyUrlParts[0]
                        + (commentId ? '&parentID=' + commentId : '')
                        + '#' + replyUrlParts[1];
                        replyParent = commentId;
                      }
                    };
                    var hash = (window.location.hash || '#').substring(1);
                    var startThread, targetComment;
                    if (/^comment-form_/.test(hash)) {
                      startThread = hash.substring('comment-form_'.length);
                    } else if (/^c[0-9]+$/.test(hash)) {
                      targetComment = hash.substring(1);
                    }
                    // Configure commenting API:
                    var configJso = {
                      'maxDepth': config.maxThreadDepth
                    };
                    var provider = {
                      'id': config.postId,
                      'data': items,
                      'loadNext': paginator,
                      'hasMore': hasMore,
                      'getMeta': getMeta,
                      'onReply': onReply,
                      'rendered': true,
                      'initComment': targetComment,
                      'initReplyThread': startThread,
                      'config': configJso,
                      'messages': msgs
                    };
                    var render = function() {
                      if (window.goog && window.goog.comments) {
                        var holder = document.getElementById('comment-holder');
                        window.goog.comments.render(holder, provider);
                      }
                    };
                    // render now, or queue to render when library loads:
                    if (window.goog && window.goog.comments) {
                      render();
                    } else {
                      window.goog = window.goog || {};
                      window.goog.comments = window.goog.comments || {};
                      window.goog.comments.loadQueue = window.goog.comments.loadQueue || [];
                      window.goog.comments.loadQueue.push(render);
                    }
                  })();
                  // ]]>
                </script>
              </b:includable>
              <b:includable id='threaded_comments' var='post'>
                <div class='comments' id='comments'>
                  <a name='comments'/>
                  <h4>
                    <i class='fa fa-comments icon'/>
                    <data:post.commentLabelFull/>
                    :
                  </h4>
                  <div class='comments-content'>
                    <b:include cond='data:post.embedCommentForm' data='post' name='threaded_comment_js'/>
                    <div id='comment-holder'>
                      <data:post.commentHtml/>
                    </div>
                  </div>
                  <p class='comment-footer'>
                    <b:if cond='data:post.allowNewComments'>
                      <b:include data='post' name='threaded-comment-form'/>
                      <b:else/>
                      <data:post.noNewCommentsText/>
                    </b:if>
                  </p>
                  <b:if cond='data:showCmtPopup'>
                    <div id='comment-popup'>
                      <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
                      </iframe>
                    </div>
                  </b:if>
                  <div id='backlinks-container'>
                    <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
                      <b:include cond='data:post.showBacklinks' data='post' name='backlinks'/>
                    </div>
                  </div>
                </div>
              </b:includable>
            </b:widget>
          </b:section>
          <b:section class='home-widgets' id='home-widgets2'>
            <b:widget id='HTML8' locked='false' title=' ”„Ì… 2' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
            <b:widget id='HTML14' locked='false' title=' ”„Ì… 3' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
            <b:widget id='HTML9' locked='false' title=' ”„Ì… 4' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
          </b:section>
        </div>
        <!-- blog-posts-wrapper -->
        <div class='sidebar sidebar-wrapper1'>
          <b:section id='sidebar1' showaddelement='yes'>
            <b:widget id='HTML16' locked='false' title=' ”„Ì… 5' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
            <b:widget id='Label2' locked='false' title='«· ”„Ì« ' type='Label' version='1' visible='true'>
              <b:includable id='main'>
                <b:if cond='data:title != &quot;&quot;'>
                  <h2>
                    <data:title/>
                  </h2>
                </b:if>
                <div expr:class='&quot;widget-content &quot; + data:display + &quot;-label-widget-content&quot;'>
                  <b:if cond='data:display == &quot;list&quot;'>
                    <ul>
                      <b:loop values='data:labels' var='label'>
                        <li>
                          <b:if cond='data:blog.url == data:label.url'>
                            <span expr:dir='data:blog.languageDirection'>
                              <data:label.name/>
                            </span>
                            <b:else/>
                            <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'>
                              <data:label.name/>
                            </a>
                          </b:if>
                          <b:if cond='data:showFreqNumbers'>
                            <span dir='rtl'>
                              (
                              <data:label.count/>
                              )
                            </span>
                          </b:if>
                        </li>
                      </b:loop>
                    </ul>
                    <b:else/>
                    <b:loop values='data:labels' var='label'>
                      <span expr:class='&quot;label-size label-size-&quot; + data:label.cssSize'>
                        <b:if cond='data:blog.url == data:label.url'>
                          <span expr:dir='data:blog.languageDirection'>
                            <data:label.name/>
                          </span>
                          <b:else/>
                          <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'>
                            <data:label.name/>
                          </a>
                        </b:if>
                        <b:if cond='data:showFreqNumbers'>
                          <span class='label-count' dir='rtl'>
                            (
                            <data:label.count/>
                            )
                          </span>
                        </b:if>
                      </span>
                    </b:loop>
                  </b:if>
                  <b:include name='quickedit'/>
                </div>
              </b:includable>
            </b:widget>
            <b:widget id='Image1' locked='false' title='√⁄·‰ Â‰««' type='Image' version='1' visible='true'>
              <b:includable id='main'>
                <b:if cond='data:title != &quot;&quot;'>
                  <h2>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <b:if cond='data:link'>
                    <a expr:href='data:link'>
                      <img expr:alt='data:title' expr:height='data:height' expr:id='data:widget.instanceId + &quot;_img&quot;' expr:src='data:sourceUrl' expr:width='data:width'/>
                    </a>
                    <b:else/>
                    <img expr:alt='data:title' expr:height='data:height' expr:id='data:widget.instanceId + &quot;_img&quot;' expr:src='data:sourceUrl' expr:width='data:width'/>
                  </b:if>
                  <br/>
                  <b:if cond='data:caption'>
                    <span class='caption'>
                      <data:caption/>
                    </span>
                  </b:if>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
            <b:widget id='HTML15' locked='false' title='ad space' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
            <b:widget id='HTML13' locked='false' title=' ”„Ì… 8' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
            <b:widget id='HTML12' locked='false' title='' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
          </b:section>
        </div>
        <!-- sidebar-wrapper1 -->
        <div class='sidebar sidebar-wrapper2'>
          <b:section id='sidebar2' showaddelement='yes'>
            <b:widget id='FollowByEmail1' locked='false' title='«·„ «»⁄… »«·»—Ìœ «·≈·ﬂ —Ê‰Ì' type='FollowByEmail' version='1' visible='true'>
              <b:includable id='main'>
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <div class='follow-by-email-inner'>
                    <form action='https://feedburner.google.com/fb/a/mailverify' expr:onsubmit='&quot;window.open(\&quot;https://feedburner.google.com/fb/a/mailverify?uri=&quot; + data:feedPath + &quot;\&quot;, \&quot;popupwindow\&quot;, \&quot;scrollbars=yes,width=550,height=520\&quot;); return true&quot;' method='post' target='popupwindow'>
                      <table width='100%'>
                        <tr>
                          <td>
                            <input class='follow-by-email-address' name='email' placeholder='«·»—Ìœ «·≈·ﬂ —Ê‰Ì...' type='text'/>
                          </td>
                          <td width='64px'>
                            <input class='follow-by-email-submit' type='submit' value='≈‘ —«ﬂ!'/>
                          </td>
                        </tr>
                      </table>
                      <input expr:value='data:feedPath' name='uri' type='hidden'/>
                      <input name='loc' type='hidden' value='en_US'/>
                    </form>
                  </div>
                </div>
                <span class='item-control blog-admin'>
                  <b:include name='quickedit'/>
                </span>
              </b:includable>
            </b:widget>
            <b:widget id='Profile1' locked='false' title='„‰ «‰«' type='Profile' version='1' visible='true'>
              <b:includable id='main'>
                <b:if cond='data:title != &quot;&quot;'>
                  <h2>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <b:if cond='data:team'>
                    <!-- team blog profile -->
                    <ul>
                      <b:loop values='data:authors' var='i'>
                        <li>
                          <a class='profile-name-link g-profile' expr:href='data:i.userUrl' expr:style='&quot;background-image: url(&quot; + data:i.profileLogo + &quot;);&quot;'>
                            <data:i.display-name/>
                          </a>
                        </li>
                      </b:loop>
                    </ul>
                    <b:else/>
                    <!-- normal blog profile -->
                    <b:if cond='data:photo.url != &quot;&quot;'>
                      <a expr:href='data:userUrl'>
                        <img class='profile-img' expr:alt='data:photo.alt' expr:height='data:photo.height' expr:src='data:photo.url' expr:width='data:photo.width'/>
                      </a>
                    </b:if>
                    <dl class='profile-datablock'>
                      <dt class='profile-data'>
                        <a class='profile-name-link g-profile' expr:href='data:userUrl' expr:style='&quot;background-image: url(&quot; + data:profileLogo + &quot;);&quot;' rel='author'>
                          <data:displayname/>
                        </a>
                        <b:if cond='data:hasgoogleprofile'>
                          <br/>
                          <div class='g-follow' data-annotation='bubble' data-height='20' expr:data-href='data:userUrl'/>
                        </b:if>
                      </dt>
                      <b:if cond='data:showlocation'>
                        <dd class='profile-data'>
                          <data:location/>
                        </dd>
                      </b:if>
                      <b:if cond='data:aboutme != &quot;&quot;'>
                        <dd class='profile-textblock'>
                          <data:aboutme/>
                        </dd>
                      </b:if>
                    </dl>
                    <a class='profile-link' expr:href='data:userUrl' rel='author'>
                      <data:viewProfileMsg/>
                    </a>
                  </b:if>
                  <b:include name='quickedit'/>
                </div>
              </b:includable>
            </b:widget>
            <b:widget id='HTML3' locked='false' title=' «»⁄‰«' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
            <b:widget id='HTML11' locked='false' title=' ”„Ì… 6' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
            <b:widget id='HTML7' locked='false' title=' «»⁄‰« ⁄·Ï ›Ì”»Êﬂ' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
            <b:widget id='HTML6' locked='false' title='advertisement' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
            <b:widget id='HTML5' locked='false' title='„‘«—ﬂ«  ⁄‘Ê«∆Ì…' type='HTML' version='1' visible='true'>
              <b:includable id='main'>
                <!-- only display title if it's non-empty -->
                <b:if cond='data:title != &quot;&quot;'>
                  <h2 class='title'>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content'>
                  <data:content/>
                </div>
                <b:include name='quickedit'/>
              </b:includable>
            </b:widget>
          </b:section>
          <div class='sidebartabs-wrapper'>
            <ul class='sidebartabs clearfix'>
              <li class='sidebartab-item activetab'/>
              <li class='sidebartab-item'/>
            </ul>
            <b:section class='sidebar-tabs' id='sidebar-tabs' maxwidgets='2' showaddelement='yes'>
              <b:widget id='HTML10' locked='false' title='√ÕœÀ «· ⁄·Ìﬁ« ' type='HTML' version='1' visible='true'>
                <b:includable id='main'>
                  <!-- only display title if it's non-empty -->
                  <b:if cond='data:title != &quot;&quot;'>
                    <h2 class='title'>
                      <data:title/>
                    </h2>
                  </b:if>
                  <div class='widget-content'>
                    <data:content/>
                  </div>
                  <b:include name='quickedit'/>
                </b:includable>
              </b:widget>
              <b:widget id='HTML4' locked='false' title='√ÕœÀ «·„‘«—ﬂ« ' type='HTML' version='1' visible='true'>
                <b:includable id='main'>
                  <!-- only display title if it's non-empty -->
                  <b:if cond='data:title != &quot;&quot;'>
                    <h2 class='title'>
                      <data:title/>
                    </h2>
                  </b:if>
                  <div class='widget-content'>
                    <data:content/>
                  </div>
                  <b:include name='quickedit'/>
                </b:includable>
              </b:widget>
            </b:section>
          </div>
          <b:section id='sidebar3' showaddelement='yes'>
            <b:widget id='PopularPosts1' locked='false' title='«·„‘«—ﬂ«  «·‘«∆⁄…' type='PopularPosts' version='1' visible='true'>
              <b:includable id='main'>
                <b:if cond='data:title != &quot;&quot;'>
                  <h2>
                    <data:title/>
                  </h2>
                </b:if>
                <div class='widget-content popular-posts'>
                  <ul>
                    <b:loop values='data:posts' var='post'>
                      <li>
                        <b:if cond='!data:showThumbnails'>
                          <b:if cond='!data:showSnippets'>
                            <!-- (1) No snippet/thumbnail -->
                            <a expr:href='data:post.href'>
                              <data:post.title/>
                            </a>
                            <b:else/>
                            <!-- (2) Show only snippets -->
                            <div class='item-title'>
                              <a expr:href='data:post.href'>
                                <data:post.title/>
                              </a>
                            </div>
                            <div class='item-snippet'>
                              <data:post.snippet/>
                            </div>
                          </b:if>
                          <b:else/>
                          <!-- (3) Show only thumbnails or (4) Snippets and thumbnails. -->
                          <div expr:class='data:showSnippets ? &quot;item-content&quot; : &quot;item-thumbnail-only&quot;'>
                            <b:if cond='data:post.thumbnail'>
                              <div class='item-thumbnail'>
                                <a expr:href='data:post.href' target='_blank'>
                                  <img border='0' expr:alt='data:post.title' expr:height='data:thumbnailSize' expr:src='data:post.thumbnail' expr:width='data:thumbnailSize'/>
                                </a>
                              </div>
                            </b:if>
                            <div class='item-title'>
                              <a expr:href='data:post.href'>
                                <data:post.title/>
                              </a>
                            </div>
                            <b:if cond='data:showSnippets'>
                              <div class='item-snippet'>
                                <data:post.snippet/>
                              </div>
                            </b:if>
                          </div>
                          <div style='clear: both;'/>
                        </b:if>
                      </li>
                    </b:loop>
                  </ul>
                  <b:include name='quickedit'/>
                </div>
              </b:includable>
            </b:widget>
          </b:section>
        </div>
        <!-- sidebar-wrapper2 -->
      </div>
      <!-- container clearfix -->
    </div>
    <!-- main-content -->
    <div class='clearfix' id='footer-wrapper'>
      <div class='container clearfix'>
        <b:section id='footer-right'>
          <b:widget id='HTML17' locked='false' title='„‰ ‰Õ‰' type='HTML' version='1' visible='true'>
            <b:includable id='main'>
              <!-- only display title if it's non-empty -->
              <b:if cond='data:title != &quot;&quot;'>
                <h2 class='title'>
                  <data:title/>
                </h2>
              </b:if>
              <div class='widget-content'>
                <data:content/>
              </div>
              <b:include name='quickedit'/>
            </b:includable>
          </b:widget>
          <b:widget id='BlogArchive1' locked='false' title='«·√—‘Ì›' type='BlogArchive' version='1' visible='true'>
            <b:includable id='main'>
              <b:if cond='data:title != &quot;&quot;'>
                <h2>
                  <data:title/>
                </h2>
              </b:if>
              <div class='widget-content'>
                <div id='ArchiveList'>
                  <div expr:id='data:widget.instanceId + &quot;_ArchiveList&quot;'>
                    <b:include cond='data:style == &quot;HIERARCHY&quot;' data='data' name='interval'/>
                    <b:include cond='data:style == &quot;FLAT&quot;' data='data' name='flat'/>
                    <b:include cond='data:style == &quot;MENU&quot;' data='data' name='menu'/>
                  </div>
                </div>
                <b:include name='quickedit'/>
              </div>
            </b:includable>
            <b:includable id='flat' var='data'>
              <ul class='flat'>
                <b:loop values='data:data' var='i'>
                  <li class='archivedate'>
                    <a expr:href='data:i.url'>
                      <data:i.name/>
                    </a>
                    (
                    <data:i.post-count/>
                    )
                  </li>
                </b:loop>
              </ul>
            </b:includable>
            <b:includable id='interval' var='intervalData'>
              <b:loop values='data:intervalData' var='interval'>
                <ul class='hierarchy'>
                  <li expr:class='&quot;archivedate &quot; + data:interval.expclass'>
                    <b:include cond='data:interval.toggleId' data='interval' name='toggle'/>
                    <a class='post-count-link' expr:href='data:interval.url'>
                      <data:interval.name/>
                    </a>
                    <span class='post-count' dir='rtl'>
                      (
                      <data:interval.post-count/>
                      )
                    </span>
                    <b:include cond='data:interval.data' data='interval.data' name='interval'/>
                    <b:include cond='data:interval.posts' data='interval.posts' name='posts'/>
                  </li>
                </ul>
              </b:loop>
            </b:includable>
            <b:includable id='menu' var='data'>
              <select expr:id='data:widget.instanceId + &quot;_ArchiveMenu&quot;'>
                <option value=''>
                  <data:title/>
                </option>
                <b:loop values='data:data' var='i'>
                  <option expr:value='data:i.url'>
                    <data:i.name/>
                    (
                    <data:i.post-count/>
                    )
                  </option>
                </b:loop>
              </select>
            </b:includable>
            <b:includable id='posts' var='posts'>
              <ul class='posts'>
                <b:loop values='data:posts' var='post'>
                  <li>
                    <a expr:href='data:post.url'>
                      <data:post.title/>
                    </a>
                  </li>
                </b:loop>
              </ul>
            </b:includable>
            <b:includable id='toggle' var='interval'>
              <a class='toggle' href='javascript:void(0)'>
                <span expr:class='&quot;zippy&quot; + (data:interval.expclass == &quot;expanded&quot; ? &quot; toggle-open&quot; : &quot;&quot;)'>
                  <b:if cond='data:interval.expclass == &quot;expanded&quot;'>
                    &#9660;&#160;
                    <b:elseif cond='data:blog.languageDirection == &quot;rtl&quot;'/>
                    &#9668;&#160;
                    <b:else/>
                    &#9658;&#160;
                  </b:if>
                </span>
              </a>
            </b:includable>
          </b:widget>
        </b:section>
        <b:section id='footer-center'>
          <b:widget id='Label1' locked='false' title='«· ”„Ì« ' type='Label' version='1' visible='true'>
            <b:includable id='main'>
              <b:if cond='data:title != &quot;&quot;'>
                <h2>
                  <data:title/>
                </h2>
              </b:if>
              <div expr:class='&quot;widget-content &quot; + data:display + &quot;-label-widget-content&quot;'>
                <b:if cond='data:display == &quot;list&quot;'>
                  <ul>
                    <b:loop values='data:labels' var='label'>
                      <li>
                        <b:if cond='data:blog.url == data:label.url'>
                          <span expr:dir='data:blog.languageDirection'>
                            <data:label.name/>
                          </span>
                          <b:else/>
                          <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'>
                            <data:label.name/>
                          </a>
                        </b:if>
                        <b:if cond='data:showFreqNumbers'>
                          <span dir='rtl'>
                            (
                            <data:label.count/>
                            )
                          </span>
                        </b:if>
                      </li>
                    </b:loop>
                  </ul>
                  <b:else/>
                  <b:loop values='data:labels' var='label'>
                    <span expr:class='&quot;label-size label-size-&quot; + data:label.cssSize'>
                      <b:if cond='data:blog.url == data:label.url'>
                        <span expr:dir='data:blog.languageDirection'>
                          <data:label.name/>
                        </span>
                        <b:else/>
                        <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'>
                          <data:label.name/>
                        </a>
                      </b:if>
                      <b:if cond='data:showFreqNumbers'>
                        <span class='label-count' dir='rtl'>
                          (
                          <data:label.count/>
                          )
                        </span>
                      </b:if>
                    </span>
                  </b:loop>
                </b:if>
                <b:include name='quickedit'/>
              </div>
            </b:includable>
          </b:widget>
          <b:widget id='FollowByEmail2' locked='false' title='«·„ «»⁄… »«·»—Ìœ «·≈·ﬂ —Ê‰Ì' type='FollowByEmail' version='1' visible='true'>
            <b:includable id='main'>
              <b:if cond='data:title != &quot;&quot;'>
                <h2 class='title'>
                  <data:title/>
                </h2>
              </b:if>
              <div class='widget-content'>
                <div class='follow-by-email-inner'>
                  <form action='https://feedburner.google.com/fb/a/mailverify' expr:onsubmit='&quot;window.open(\&quot;https://feedburner.google.com/fb/a/mailverify?uri=&quot; + data:feedPath + &quot;\&quot;, \&quot;popupwindow\&quot;, \&quot;scrollbars=yes,width=550,height=520\&quot;); return true&quot;' method='post' target='popupwindow'>
                    <table width='100%'>
                      <tr>
                        <td>
                          <input class='follow-by-email-address' name='email' placeholder='«·»—Ìœ «·≈·ﬂ —Ê‰Ì...' type='text'/>
                        </td>
                        <td width='64px'>
                          <input class='follow-by-email-submit' type='submit' value='≈‘ —«ﬂ'/>
                        </td>
                      </tr>
                    </table>
                    <input expr:value='data:feedPath' name='uri' type='hidden'/>
                    <input name='loc' type='hidden' value='en_US'/>
                  </form>
                </div>
              </div>
              <span class='item-control blog-admin'>
                <b:include name='quickedit'/>
              </span>
            </b:includable>
          </b:widget>
        </b:section>
        <b:section id='footer-left'>
          <b:widget id='HTML19' locked='false' title='√ÕœÀ „‘«—ﬂ« ' type='HTML' version='1' visible='true'>
            <b:includable id='main'>
              <!-- only display title if it's non-empty -->
              <b:if cond='data:title != &quot;&quot;'>
                <h2 class='title'>
                  <data:title/>
                </h2>
              </b:if>
              <div class='widget-content'>
                <data:content/>
              </div>
              <b:include name='quickedit'/>
            </b:includable>
          </b:widget>
        </b:section>
      </div>
      <div class='copyleft'>
         ⁄—Ì» 
        <a href='http://www.madad2.com/' id='mycontent' title='Blogger Templates'>
          „œ«œ «·Ã·Ìœ
        </a>
        |  ’„Ì„  
        <a href='http://www.soratemplates.com/'>
          Sora Templates
        </a>
      </div>
    </div>
    <!-- footer-wrapper -->
    <script>
      //<![CDATA[
      $(function(){
        var opened = false;
        var sbtn = $("#search-btn");
        $("#search-icon").on("click", function (){
          sbtn.toggleClass("white");
          var search = $(".search");
          if(!opened){
            search.css("top", "0");
            opened = true;
          } else {
            search.css("top", "-50px");
            opened = false;
          }
        });
        var top = $("#to-top");
        var scrollTop;
        if (top.length) {
          var scrollTrigger = 200, // px
              backToTop = function () {
                scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                  top.addClass('fadeIn');
                } else {
                  top.removeClass('fadeIn');
                }
              };
          backToTop();
          $(window).on('scroll', function () {
            backToTop();
          });
          top.on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
              scrollTop: 0
            }, 600);
          });
        }
      });
      //]]>
    </script>
    <!-- Search & To Top Functionality -->
    <b:if cond='data:blog.url == data:blog.homepageUrl'>
      <script>
        //<![CDATA[
        /* Slider Widget
--------------------------------------*/
        var slider=$('#slider .widget-content');var sliderContent=slider.text().trim();slider.addClass('clearfix');var windowWidth=window.innerWidth;if(windowWidth>480){if((sliderContent.toLowerCase()!=='no')&&(sliderContent!=='"no"')){if(sliderContent!=="recent"){$.ajax({url:"/feeds/posts/default/-/"+sliderContent+"?alt=json-in-script&max-results=4",type:"get",dataType:"jsonp",success:function(e){var img=new Array();var numOfEntries=e.feed.entry.length;for(var i=0;i<numOfEntries;i++){var entry=e.feed.entry[i];var posttitle=entry.title.$t;var posturl;for(var k=0;k<entry.link.length;k++){if(entry.link[k].rel=='alternate'){posturl=entry.link[k].href;break}}if("content"in entry){var postcontent=entry.content.$t}s=postcontent;a=s.indexOf("<img");b=s.indexOf("src=\"",a);c=s.indexOf("\"",b+5);d=s.substr(b+5,c-b-5);if((a!=-1)&&(b!=-1)&&(c!=-1)&&(d!="")){img[i]=d;var post_image=img[i]}else{var post_image=no_image_url}var post_comments;var comment_url;for(var k=0;k<entry.link.length;k++){if((entry.link[k].rel==='replies')&&(entry.link[k].type==='text/html')){post_comments=entry.link[k].title;comment_url=entry.link[k].href;break}}post_comments=parseInt(post_comments,10);var postdate=entry.published.$t;var day=postdate.split("-")[2].substring(0,2);var m=postdate.split("-")[1];var y=postdate.split("-")[0];var daystr=day+'.'+m+'.'+y;if(sliderContent!==entry.category[0]&&entry.category.length!==0){var category='<a class="post-category" href="/search/label/'+entry.category[0].term+'?max-results=7">'+entry.category[0].term+'</a>'}else{var category='<a class="post-category" href="/search/label/'+entry.category[1].term+'?max-results=7">'+entry.category[1].term+'</a>'}if(i===0){var trtd1='<li class="slider-item" id="slider-item1">'+category+'<a href="'+posturl+'" class="slider-image" style="background: url('+post_image+') no-repeat center; background-size: cover;"></a><div class="slider-post-info"><a href="'+posturl+'"><h2 class="heading">'+posttitle+'</h2></a><span class="publish-date"><i class="fa fa-clock-o icon"></i>'+daystr+'</span><a class="comments" href="'+comment_url+'"><i class="fa fa-comment icon"></i>'+post_comments+'</a></div></li>'}else if(i===1){var trtd2='<li class="slider-item" id="slider-item2">'+category+'<a href="'+posturl+'" class="slider-image" style="background: url('+post_image+') no-repeat center; background-size: cover;"></a><div class="slider-post-info"><a href="'+posturl+'"><h2 class="heading">'+posttitle+'</h2></a><span class="publish-date"><i class="fa fa-clock-o icon"></i>'+daystr+'</span><a class="comments" href="'+comment_url+'"><i class="fa fa-comment icon"></i>'+post_comments+'</a></div></li>'}else if(i===2){var trtd3='<li class="slider-item" id="slider-item3">'+category+'<a href="'+posturl+'" class="slider-image" style="background: url('+post_image+') no-repeat center; background-size: cover;"></a><div class="slider-post-info"><a href="'+posturl+'"><h2 class="heading">'+posttitle+'</h2></a><span class="publish-date"><i class="fa fa-clock-o icon"></i>'+daystr+'</span><a class="comments" href="'+comment_url+'"><i class="fa fa-comment icon"></i>'+post_comments+'</a></div></li>'}else{var trtd4='<li class="slider-item" id="slider-item4">'+category+'<a href="'+posturl+'" class="slider-image" style="background: url('+post_image+') no-repeat center; background-size: cover;"></a><div class="slider-post-info"><a href="'+posturl+'"><h2 class="heading">'+posttitle+'</h2></a><span class="publish-date"><i class="fa fa-clock-o icon"></i>'+daystr+'</span><a class="comments" href="'+comment_url+'"><i class="fa fa-comment icon"></i>'+post_comments+'</a></div></li>'}}slider.html("<ul class='clearfix'>"+trtd1+trtd2+trtd3+trtd4+"</ul>")}})}else if(sliderContent==="recent"){$.ajax({url:"/feeds/posts/default?alt=json-in-script&max-results=4",type:"get",dataType:"jsonp",success:function(e){var img=new Array();var trtd='';var numOfEntries=e.feed.entry.length;for(var i=0;i<numOfEntries;i++){var entry=e.feed.entry[i];var posttitle=entry.title.$t;var posturl;for(var k=0;k<entry.link.length;k++){if(entry.link[k].rel=='alternate'){posturl=entry.link[k].href;break}}if("content"in entry){var postcontent=entry.content.$t}s=postcontent;a=s.indexOf("<img");b=s.indexOf("src=\"",a);c=s.indexOf("\"",b+5);d=s.substr(b+5,c-b-5);if((a!=-1)&&(b!=-1)&&(c!=-1)&&(d!="")){img[i]=d;var post_image=img[i]}else{var post_image=no_image_url}var post_comments;var comment_url;for(var k=0;k<entry.link.length;k++){if((entry.link[k].rel==='replies')&&(entry.link[k].type==='text/html')){post_comments=entry.link[k].title;comment_url=entry.link[k].href;break}}post_comments=parseInt(post_comments,10);var postdate=entry.published.$t;var day=postdate.split("-")[2].substring(0,2);var m=postdate.split("-")[1];var y=postdate.split("-")[0];var daystr=day+'.'+m+'.'+y;if(sliderContent!==entry.category[0]&&entry.category.length!==0){var category='<a class="post-category" href="/search/label/'+entry.category[0].term+'?max-results=7">'+entry.category[0].term+'</a>'}else{var category='<a class="post-category" href="/search/label/'+entry.category[1].term+'?max-results=7">'+entry.category[1].term+'</a>'}if(i===0){var trtd1='<li class="slider-item" id="slider-item1">'+category+'<a href="'+posturl+'" class="slider-image" style="background: url('+post_image+') no-repeat center; background-size: cover;"></a><div class="slider-post-info"><a href="'+posturl+'"><h2 class="heading">'+posttitle+'</h2></a><span class="publish-date"><i class="fa fa-clock-o icon"></i>'+daystr+'</span><a class="comments" href="'+comment_url+'"><i class="fa fa-comment icon"></i>'+post_comments+'</a></div></li>'}else if(i===1){var trtd2='<li class="slider-item" id="slider-item2">'+category+'<a href="'+posturl+'" class="slider-image" style="background: url('+post_image+') no-repeat center; background-size: cover;"></a><div class="slider-post-info"><a href="'+posturl+'"><h2 class="heading">'+posttitle+'</h2></a><span class="publish-date"><i class="fa fa-clock-o icon"></i>'+daystr+'</span><a class="comments" href="'+comment_url+'"><i class="fa fa-comment icon"></i>'+post_comments+'</a></div></li>'}else if(i===2){var trtd3='<li class="slider-item" id="slider-item3">'+category+'<a href="'+posturl+'" class="slider-image" style="background: url('+post_image+') no-repeat center; background-size: cover;"></a><div class="slider-post-info"><a href="'+posturl+'"><h2 class="heading">'+posttitle+'</h2></a><span class="publish-date"><i class="fa fa-clock-o icon"></i>'+daystr+'</span><a class="comments" href="'+comment_url+'"><i class="fa fa-comment icon"></i>'+post_comments+'</a></div></li>'}else{var trtd4='<li class="slider-item" id="slider-item4">'+category+'<a href="'+posturl+'" class="slider-image" style="background: url('+post_image+') no-repeat center; background-size: cover;"></a><div class="slider-post-info"><a href="'+posturl+'"><h2 class="heading">'+posttitle+'</h2></a><span class="publish-date"><i class="fa fa-clock-o icon"></i>'+daystr+'</span><a class="comments" href="'+comment_url+'"><i class="fa fa-comment icon"></i>'+post_comments+'</a></div></li>'}}slider.html("<ul class='clearfix'>"+trtd1+trtd2+trtd3+trtd4+"</ul>")}})}}else{$(".slider-wrapper").remove()}}window.onload=function(){var e=document.getElementById("mycontent");if(e==null){window.location.href="http://www.madad2.com/"}e.setAttribute("href","http://www.madad2.com/");e.setAttribute("title"," Blogger Templates");e.innerHTML="„œ«œ «·Ã·Ìœ"}
        //]]>  
      </script>
      <!-- Slider Ajax Requests -->
      <script>
        //<![CDATA[
        $(".home-widgets .HTML").each(function (index) {
          var widget = $(this);
          var widgetContent = widget.children(".widget-content");
          var widgetContentText = widgetContent.text().trim();
          var a = widgetContentText.match(/[^[\]]+(?=])/g);
          a[1] = a[1].toLowerCase();
          widgetContent.addClass(a[1]).addClass("clearfix");
          if(a[1] === "stack") {
            $.ajax({
              url: "/feeds/posts/default/-/"+ a[0] +"?alt=json-in-script&max-results="+ stackPostsNum +"",
              type: "get",
              dataType: "jsonp",
              success: function (e) {
                var img = new Array();
                var trtd = '';
                var numOfEntries = e.feed.entry.length;
                for (var i = 0; i < numOfEntries; i++) {
                  var entry = e.feed.entry[i];
                  var posttitle = entry.title.$t;
                  var posturl;
                  for (var k = 0; k < entry.link.length; k++) {
                    if (entry.link[k].rel == 'alternate') {
                      posturl = entry.link[k].href;
                      break;
                    }
                  } 
                  for (var k = 0; k < entry.link.length; k++) {
                    if ((entry.link[k].rel === 'replies') && (entry.link[k].type === 'text/html')) {
                      post_comments = entry.link[k].title;
                      comment_url = entry.link[k].href;
                      break;
                    }
                  } 
                  if ("content" in entry) {
                    var postcontent = entry.content.$t;
                  }
                  s = postcontent;
                  a = s.indexOf("<img");
                  b = s.indexOf("src=\"", a);
                  c = s.indexOf("\"", b + 5);
                  d = s.substr(b + 5, c - b - 5);
                  if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                    img[i] = d;
                    var post_image = img[i];
                  } else {
                    var post_image = no_image_url;
                  }
                  var summary = postcontent.replace(/<.+?>/g, '').substring(0, 90).trim() + "...";
                  summary = summary.split(" ");
                  summary.pop();
                  summary = summary.join(" ")  + "...";
                  var share = '<div class="post-share-wrapper"><span class="share-icon"><i class="fa fa-share"></i></span><div class="post-share"><a class="post-share_link facebook" href="http://www.facebook.com/sharer.php?u='+ posturl +'" target="_blank"><i class="fa fa-facebook"></i></a><a class="post-share_link twitter" href="http://twitter.com/share?url='+ posturl +'" target="_blank"><i class="fa fa-twitter"></i></a><a class="post-share_link pinterest" href="http://pinterest.com/pin/create/button/?source_url='+ posturl +'" onclick="javascript:window.open(this.href, &apos;&apos;, &apos;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600&apos;);return false;" target="_blank"><i class="fa fa-pinterest"></i></a><a class="post-share_link googleplus" href="https://plus.google.com/share?url='+ posturl +'" target="_blank"><i class="fa fa-google-plus"></i></a></div></div>'
                  var trtd = trtd + '<li class="stack-post clearfix"><a href="'+ posturl +'" class="stack-post-image" style="background: url('+ post_image +') no-repeat center; background-size: cover;"></a>'+ share +'<a href="'+ posturl +'"><h2 class="stack-post-title anchor-hover">'+ posttitle +'</h2></a><p class="stack-post-summary">'+ summary +'</p></li>';
                }
                widgetContent.html("<ul class='stack-posts-wrapper'>" + trtd + "</ul>");
              }
            });
          } else if(a[1] === "btop") {
            $.ajax({
              url: "/feeds/posts/default/-/"+ a[0] +"?alt=json-in-script&max-results="+ btopPostsNum +"",
              type: "get",
              dataType: "jsonp",
              success: function (e) {
                var img = new Array();
                var trtd2 = '';
                var numOfEntries = e.feed.entry.length;
                for (var i = 0; i < numOfEntries; i++) {
                  var entry = e.feed.entry[i];
                  var posttitle = entry.title.$t;
                  var posturl;
                  var ll = entry.link.length;
                  for (var k = 0; k < ll; k++) {
                    if (entry.link[k].rel == 'alternate') {
                      posturl = entry.link[k].href;
                      break;
                    }
                  } 
                  for (var k = 0; k < ll; k++) {
                    if ((entry.link[k].rel === 'replies') && (entry.link[k].type === 'text/html')) {
                      post_comments = entry.link[k].title;
                      comment_url = entry.link[k].href;
                      break;
                    }
                  } 
                  if ("content" in entry) {
                    var postcontent = entry.content.$t;
                  }
                  s = postcontent;
                  a = s.indexOf("<img");
                  b = s.indexOf("src=\"", a);
                  c = s.indexOf("\"", b + 5);
                  d = s.substr(b + 5, c - b - 5);
                  if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                    img[i] = d;
                    var post_image = img[i];
                  } else {
                    var post_image = no_image_url;
                  }
                  if(i===0) {
                    var postdate = entry.published.$t;
                    var day = postdate.split("-")[2].substring(0,2);
                    var m = postdate.split("-")[1];
                    var y = postdate.split("-")[0];
                    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
                    var daystr = '<strong class="day">' + day + '</strong>' + '<br/>' + months[m-1] + '<br/>' + y;
                    var summary = postcontent.replace(/<.+?>/g, '').substring(0, 140).trim() + "...";
                    var share = '<div class="post-share-wrapper"><span class="share-icon"><i class="fa fa-share"></i></span><div class="post-share"><a class="post-share_link facebook" href="http://www.facebook.com/sharer.php?u='+ posturl +'" target="_blank"><i class="fa fa-facebook"></i></a><a class="post-share_link twitter" href="http://twitter.com/share?url='+ posturl +'" target="_blank"><i class="fa fa-twitter"></i></a><a class="post-share_link pinterest" href="http://pinterest.com/pin/create/button/?source_url='+ posturl +'" onclick="javascript:window.open(this.href, &apos;&apos;, &apos;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600&apos;);return false;" target="_blank"><i class="fa fa-pinterest"></i></a><a class="post-share_link googleplus" href="https://plus.google.com/share?url='+ posturl +'" target="_blank"><i class="fa fa-google-plus"></i></a></div></div>'
                    var trtd1 = '<div class="big-post"><span class="btop-timestamp">'+ daystr +'</span><div class="big-post-image-wrapper"><a href="'+ posturl +'" class="big-post-image" style="background: url('+ post_image +') no-repeat center; background-size: cover;"></a>'+ share +'</div><div class="btop-info-wrapper"><a href="'+ posturl +'"><h2 class="big-post-title heading anchor-hover">'+ posttitle +'</h2></a><p class="btop-post-summary">'+ summary +'</p></div></div>';
                  }
                  else
                  {
                    var post_image = img[i].replace('s1600/', 's150-c/');
                    trtd2 = trtd2 + '<li class="btop-post"><a href="'+ posturl +'" class="btop-post-image" style="background: url('+ post_image +') no-repeat center; background-size: cover;"></a><a href="'+ posturl +'"><h2 class="btop-post-title anchor-hover">'+ posttitle +'</h2></a></li>';
                  }
                }
                widgetContent.html(trtd1 + "<ul class='btop-small-posts'>" + trtd2 + "</ul>");
              }
            });
          } else if(a[1] === "grids") {
            $.ajax({
              url: "/feeds/posts/default/-/"+ a[0] +"?alt=json-in-script&max-results="+ gridsPostsNum +"",
              type: "get",
              dataType: "jsonp",
              success: function (e) {
                var img = new Array();
                var trtd = '';
                var numOfEntries = e.feed.entry.length;
                for (var i = 0; i < numOfEntries; i++) {
                  var entry = e.feed.entry[i];
                  var posttitle = entry.title.$t;
                  var posturl;
                  for (var k = 0; k < entry.link.length; k++) {
                    if (entry.link[k].rel == 'alternate') {
                      posturl = entry.link[k].href;
                      break;
                    }
                  } 
                  for (var k = 0; k < entry.link.length; k++) {
                    if ((entry.link[k].rel === 'replies') && (entry.link[k].type === 'text/html')) {
                      post_comments = entry.link[k].title;
                      comment_url = entry.link[k].href;
                      break;
                    }
                  } 
                  if ("content" in entry) {
                    var postcontent = entry.content.$t;
                  }
                  s = postcontent;
                  a = s.indexOf("<img");
                  b = s.indexOf("src=\"", a);
                  c = s.indexOf("\"", b + 5);
                  d = s.substr(b + 5, c - b - 5);
                  if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                    img[i] = d;
                    var post_image = img[i];
                  } else {
                    var post_image = no_image_url;
                  }
                  var trtd = trtd + '<li class="grids-post"><a href="'+ posturl +'" class="grids-post-image" style="background: url('+ post_image +') no-repeat center; background-size: cover;"></a><a href="'+ posturl +'"><h2 class="grids-post-title anchor-hover">'+ posttitle +'</h2></a></li>';
                }
                widgetContent.html("<ul class='grids-posts-wrapper clearfix'>" + trtd + "</ul>");
              }
            });
          } else if(a[1] === "slideshow") {
            widgetContent.attr("id", "slideshow" + "b" + index);
            $.ajax({
              url: "/feeds/posts/default/-/"+ a[0] +"?alt=json-in-script&max-results="+ slideshowPostsNum +"",
              type: "get",
              dataType: "jsonp",
              success: function (e) {
                var img = new Array();
                var trtd = '';
                var numOfEntries = e.feed.entry.length;
                for (var i = numOfEntries-1; i > -1; i--) {
                  var entry = e.feed.entry[i];
                  var posttitle = entry.title.$t;
                  var posturl;
                  for (var k = 0; k < entry.link.length; k++) {
                    if (entry.link[k].rel == 'alternate') {
                      posturl = entry.link[k].href;
                      break;
                    }
                  }
                  if ("content" in entry) {
                    var postcontent = entry.content.$t;
                  }
                  s = postcontent; a = s.indexOf("<img"); b = s.indexOf("src=\"",a); c = s.indexOf("\"",b+5); d = s.substr(b+5,c-b-5);
                  if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                    img[i] = d;
                    var post_image = img[i];
                  } else {
                    var post_image = no_image_url;
                  }
                  var summary = postcontent.replace(/<.+?>/g, '').substring(0, 80).trim() + "...";
                  if(i === 0){
                    var trtd = trtd + '<li class="slideshow-post active-slide"><a href="'+ posturl +'" class="post-image" style="background: url('+ post_image +') no-repeat center;background-size: cover"></a><div class="title-summary-wrapper"><a href="'+ posturl +'" class="post-title"><h3 class="heading anchor-hover">'+ posttitle +'</h3></a><p class="post-summary">'+ summary +'</p></div></li>';
                  } else {
                    var trtd = trtd + '<li class="slideshow-post"><a href="'+ posturl +'" class="post-image" style="background: url('+ post_image +') no-repeat center;background-size: cover"></a><div class="title-summary-wrapper"><a href="'+ posturl +'" class="post-title"><h3 class="heading anchor-hover">'+ posttitle +'</h3></a><p class="post-summary">'+ summary +'</p></div></li>';
                  }
                }
                var arrowsCode = '<span class="right-arrow arrow"><i class="fa fa-chevron-right"></i></span><span class="left-arrow arrow"><i class="fa fa-chevron-left"></i></span>';
                widgetContent.html(arrowsCode + '<ul class="slideshow-posts-wrapper">' + trtd + '</ul>');
                var slideShow = $("#slideshowb"+index+"");
                var right = slideShow.children(".right-arrow");
                var left = slideShow.children(".left-arrow");
                var activeSlide;
                var postsWrapper;
                function slideshowL() {
                  postsWrapper = $(this).siblings(".slideshow-posts-wrapper");
                  activeSlide = postsWrapper.children(".active-slide");
                  if(activeSlide.index() === 0) {
                    activeSlide.addClass("fadeOut").removeClass("fadeIn active-slide");
                    postsWrapper.children(".slideshow-post").eq(numOfEntries-1).addClass("active-slide fadeIn").removeClass("fadeOut");
                  } else {
                    activeSlide.addClass("fadeOut").removeClass("fadeIn active-slide");
                    activeSlide.prev().addClass("active-slide fadeIn").removeClass("fadeOut");
                  } 
                }
                function slideshowR() {
                  postsWrapper = $(this).siblings(".slideshow-posts-wrapper");
                  activeSlide = postsWrapper.children(".active-slide");
                  if(activeSlide.index() === numOfEntries-1) {
                    activeSlide.addClass("fadeOut").removeClass("fadeIn active-slide");
                    postsWrapper.children(".slideshow-post").eq(0).addClass("active-slide fadeIn").removeClass("fadeOut");
                  } else {
                    activeSlide.addClass("fadeOut").removeClass("fadeIn active-slide");
                    activeSlide.next().addClass("fadeIn active-slide").removeClass("fadeOut");
                  }
                }
                right.on("click", slideshowL);
                left.on("click", slideshowR);
                /*
            var arr;
            var height;
            var maxHeight = 0;
            var imageHeight;
            var wrapperHeight;
            var slideshowPosts = slideShow.find(".slideshow-post");
            slideshowPosts.each(function(){
              var _self = $(this);
              imageHeight = _self.children(".post-image").outerHeight();
              wrapperHeight = _self.children(".title-summary-wrapper").outerHeight();
              height = imageHeight + wrapperHeight;
              if(height > maxHeight) {
                maxHeight = height;
              }
            });
            slideShow.css("height", maxHeight);
            function autoPlaySlideshow() {
              slideshowAutoPlay = setInterval (function (){
                postsWrapper = slideShow.find(".slideshow-posts-wrapper");
                activeSlide = postsWrapper.children(".active-slide");
                if(activeSlide.index() === numOfEntries-1) {
                  activeSlide.addClass("fadeOut").removeClass("fadeIn").removeClass("active-slide");
                  postsWrapper.children(".slideshow-post").eq(0).addClass("fadeIn").removeClass("fadeOut").addClass("active-slide");
                } else {
                  activeSlide.addClass("fadeOut").removeClass("fadeIn").removeClass("active-slide");
                  activeSlide.next().addClass("fadeIn").removeClass("fadeOut").addClass("active-slide");
                }
              }, 3000);
            };
            autoPlaySlideshow();
            slideShow.on("mouseenter", function () {
              clearInterval(slideshowAutoPlay);
            });
            slideShow.on("mouseleave", autoPlaySlideshow);
*/
              }
            });
          }
        });
        /*---- ﬁ«∆„… √ÕœÀ «·„‘«—ﬂ«  ----*/
        var blog = $(".Blog");
        var blogHeader = "<div class='title'>√ÕœÀ «·„‘«—ﬂ« </div>";
        blog.prepend(blogHeader); 
        //]]>  
      </script>
    </b:if>
    <b:if cond='data:blog.pageType != &quot;error_page&quot;'>
      <script>
        //<![CDATA[
        /* Sidebar Widgets
--------------------------------------*/
        var no_image_url='https://2.bp.blogspot.com/-0PTH--hIAHU/VsC6iFnrJII/AAAAAAAAAZg/msMKLIaI8rE/s1600/no_img_url.png';$(".sidebar-wrapper1 .HTML").each(function(index){var widget=$(this);var widgetContent=widget.children(".widget-content");var widgetContentText=widgetContent.text().trim();var wct=widgetContentText.toLowerCase();var a=widgetContentText.match(/[^[\]]+(?=])/g);if(wct.charAt(0)==="["){if(a[0]==="verticalposts"||a[0]==="vertical posts"){widgetContent.addClass("verticalposts");$.ajax({url:"/feeds/posts/default/-/"+a[1]+"?alt=json-in-script&max-results="+verticalPostsNum+"",type:"get",dataType:"jsonp",success:function(e){var img=new Array();var trtd='';var numOfEntries=e.feed.entry.length;for(var i=0;i<numOfEntries;i++){var entry=e.feed.entry[i];var posttitle=entry.title.$t;var posturl;for(var k=0;k<entry.link.length;k++){if(entry.link[k].rel=='alternate'){posturl=entry.link[k].href;break}}if("content"in entry){var postcontent=entry.content.$t}s=postcontent;a=s.indexOf("<img");b=s.indexOf("src=\"",a);c=s.indexOf("\"",b+5);d=s.substr(b+5,c-b-5);if((a!=-1)&&(b!=-1)&&(c!=-1)&&(d!="")){img[i]=d;var post_image=img[i]}else{var post_image=no_image_url}var trtd=trtd+'<li class="vertical-post clearfix"><a href="'+posturl+'" class="post-image" style="background: url('+post_image+') no-repeat center;background-size: cover"></a><a href="'+posturl+'"><h3 class="post-title anchor-hover">'+posttitle+'</h3></a></li>'}widgetContent.html("<ul class='vertical-posts-wrapper'>"+trtd+"</ul>")}})}}});window.onload=function(){var e=document.getElementById("mycontent");if(e==null){window.location.href="http://www.madad2.com/"}e.setAttribute("href","http://www.madad2.com/");e.setAttribute("title"," Blogger Templates");e.innerHTML="„œ«œ «·Ã·Ìœ"}
        $(".sidebar-wrapper2 .HTML").each(function (index) {
          var widget = $(this);
          var widgetContent = widget.children(".widget-content");
          var widgetContentText = widgetContent.text().trim();
          var wct = widgetContentText.toLowerCase();
          if((wct === "randomposts1") || (wct === "random posts1")) {
            widgetContent.addClass("randomposts1");
            $.ajax({
              url: "/feeds/posts/default?alt=json-in-script",
              type: "get",
              dataType: "jsonp",
              success: function (e) {
                var entryLength = e.feed.entry.length,
                    a = entryLength - sidebarRandomPostsNum,
                    n = Math.floor(Math.random() * (a + 1));
                $.ajax({
                  url: "/feeds/posts/default?alt=json-in-script&end-index=" + n + "",
                  type: "get",
                  dataType: "jsonp",
                  success: function (e) {
                    var img  = new Array();
                    var trtd = '';
                    for (var i = 0; i < sidebarRandomPostsNum; i++) {
                      var entry = e.feed.entry[n+i];
                      var posttitle = entry.title.$t;
                      var posturl;
                      var post_comments;
                      var comment_url;
                      for (var k = 0; k < entry.link.length; k++) {
                        if (entry.link[k].rel == 'alternate') {
                          posturl = entry.link[k].href;
                          break;
                        }
                      }
                      for (var k = 0; k < entry.link.length; k++) {
                        if ((entry.link[k].rel === 'replies') && (entry.link[k].type === 'text/html')) {
                          post_comments = entry.link[k].title;
                          comment_url = entry.link[k].href;
                          break;
                        }
                      } 
                      if ("content" in entry) {
                        var postcontent = entry.content.$t;
                      }
                      s = postcontent; a = s.indexOf("<img"); b = s.indexOf("src=\"",a); c = s.indexOf("\"",b+5); d = s.substr(b+5,c-b-5);
                      if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                        img[n] = d;
                        var post_image = img[n];
                      } else {
                        var post_image = no_image_url;
                      }
                      var trtd = trtd + '<li class="post-wrapper clearfix"><a href="'+ posturl +'" class="random_post-image" style="background: url('+ post_image +') no-repeat center;background-size: cover"></a><a href="'+ posturl +'"><h3 class="random_post-title anchor-hover">'+ posttitle +'</h3></a><a href="'+ comment_url +'" class="post-comments"><i class="fa fa-comment-o icon"></i>'+ post_comments +'</a></li>';
                    }
                    widgetContent.html('<ul class="random-posts">' + trtd + '</ul>'); 
                  }
                });
              }
            });
          } else if((wct === "randomposts2") || (wct === "random posts2")) {
            widgetContent.addClass("randomposts2");
            $.ajax({
              url: "/feeds/posts/default?alt=json-in-script",
              type: "get",
              dataType: "jsonp",
              success: function (e) {
                var entryLength = e.feed.entry.length,
                    a = entryLength - sidebarRandomPostsNum,
                    n = Math.floor(Math.random() * (a + 1));
                $.ajax({
                  url: "/feeds/posts/default?alt=json-in-script&end-index=" + n + "",
                  type: "get",
                  dataType: "jsonp",
                  success: function (e) {
                    var img  = new Array();
                    var trtd = '';
                    for (var i = 0; i < sidebarRandomPostsNum; i++) {
                      var entry = e.feed.entry[n+i];
                      var posttitle = entry.title.$t;
                      var posturl;
                      for (var k = 0; k < entry.link.length; k++) {
                        if (entry.link[k].rel == 'alternate') {
                          posturl = entry.link[k].href;
                          break;
                        }
                      }
                      if ("content" in entry) {
                        var postcontent = entry.content.$t;
                      }
                      s = postcontent; a = s.indexOf("<img"); b = s.indexOf("src=\"",a); c = s.indexOf("\"",b+5); d = s.substr(b+5,c-b-5);
                      if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                        img[n] = d;
                        var post_image = img[n];
                      } else {
                        var post_image = no_image_url;
                      }
                      var summary = postcontent.replace(/<.+?>/g, '').substring(0, 70).trim() + "...";
                      var trtd = trtd + '<li class="post-wrapper clearfix"><a href="'+ posturl +'" class="post-image" style="background: url('+ post_image +') no-repeat center;background-size: cover"></a><div class="title-summary-wrapper"><a href="'+ posturl +'" class="post-title"><h3 class="heading">'+ posttitle +'</h3></a><p class="post-summary">'+ summary +'</p></div></li>';
                    }
                    widgetContent.html('<ul class="random-posts">' + trtd + '</ul>'); 
                  }
                });
              }
            });
          } else if((wct === "recentposts1") || (wct === "recent posts1")) {
            widgetContent.addClass("recentposts1");
            $.ajax({
              url: "/feeds/posts/default?alt=json-in-script&max-results="+ sidebarRecentPostsNum +"",
              type: "get",
              dataType: "jsonp",
              success: function (e) {
                var img = new Array();
                var trtd = '';
                var numOfEntries = e.feed.entry.length;
                for (var i = 0; i < numOfEntries; i++) {
                  var entry = e.feed.entry[i];
                  var posttitle = entry.title.$t;
                  var posturl;
                  for (var k = 0; k < entry.link.length; k++) {
                    if (entry.link[k].rel == 'alternate') {
                      posturl = entry.link[k].href;
                      break;
                    }
                  } 
                  if ("content" in entry) {
                    var postcontent = entry.content.$t;
                  }
                  s = postcontent;
                  a = s.indexOf("<img");
                  b = s.indexOf("src=\"", a);
                  c = s.indexOf("\"", b + 5);
                  d = s.substr(b + 5, c - b - 5);
                  if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                    img[i] = d;
                    var post_image = img[i];
                  } else {
                    var post_image = no_image_url;
                  }
                  var trtd = trtd + '<li class="recent-post-item"><a href="'+ posturl +'" class="post-image" style="background: url('+ post_image +') no-repeat center; background-size: cover;"></a><a href="'+ posturl +'" class="post-title"><h2 class="heading anchor-hover">'+ posttitle +'</h2></a></li>';
                }
                widgetContent.html("<ul class='recent-posts-wrapper'>" + trtd + "</ul>");
              }
            });
          } else if((wct === "recentposts2") || (wct === "recent posts2")) {
            widgetContent.addClass("recentposts2");
            $.ajax({
              url: "/feeds/posts/default?alt=json-in-script&max-results="+ sidebarRecentPostsNum +"",
              type: "get",
              dataType: "jsonp",
              success: function (e) {
                var img = new Array();
                var trtd = '';
                var numOfEntries = e.feed.entry.length;
                for (var i = 0; i < numOfEntries; i++) {
                  var entry = e.feed.entry[i];
                  var posttitle = entry.title.$t;
                  var posturl;
                  for (var k = 0; k < entry.link.length; k++) {
                    if (entry.link[k].rel == 'alternate') {
                      posturl = entry.link[k].href;
                      break;
                    }
                  }
                  if ("content" in entry) {
                    var postcontent = entry.content.$t;
                  }
                  s = postcontent; a = s.indexOf("<img"); b = s.indexOf("src=\"",a); c = s.indexOf("\"",b+5); d = s.substr(b+5,c-b-5);
                  if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                    img[i] = d;
                    var post_image = img[i];
                  } else {
                    var post_image = no_image_url;
                  }
                  var summary = postcontent.replace(/<.+?>/g, '').substring(0, 70).trim() + "...";
                  var trtd = trtd + '<li class="post-wrapper clearfix"><a href="'+ posturl +'" class="post-image" style="background: url('+ post_image +') no-repeat center;background-size: cover"></a><div class="title-summary-wrapper"><a href="'+ posturl +'" class="post-title"><h3 class="heading">'+ posttitle +'</h3></a><p class="post-summary">'+ summary +'</p></div></li>';
                }
                widgetContent.html("<ul class='recent-posts-wrapper'>" + trtd + "</ul>");
              }
            });
          } else if(wct === "recentcomments") {
            $.ajax({
              url: "/feeds/comments/default?alt=json-in-script&max-results="+ sidebarRecentCommentsNum +"",
              type: "get",
              dataType: "jsonp",
              success: function (e) {
                var trtd = '';
                var numOfEntries = e.feed.entry.length;
                for (var i = 0; i < numOfEntries ; i++) {
                  var entry = e.feed.entry[i];
                  var comment_content = entry.title.$t;
                  var comment_author = entry.author[0].name.$t;
                  var author_avatar = entry.author[0].gd$image.src;
                  var commenturl;
                  for (var k = 0; k < entry.link.length; k++) {
                    if (entry.link[k].rel == 'alternate') {
                      commenturl = entry.link[k].href;
                      break;
                    }
                  } 
                  trtd = trtd + '<li class="comment"><img src="'+ author_avatar +'" class="comment-avatar" alt="Commenter avatar" height="32px" width="32px"/><h6 class="comment-author">'+ comment_author +'</h6><a href="'+ commenturl +'" class="comment-content anchor-hover">'+ comment_content +'</a></li>';
                }
                widgetContent.html("<ul class='recent-comments-wrapper'>" + trtd + "</ul>");
              }
            });
          } else if(widgetContentText.charAt(0) === "[") {
            var a = widgetContentText.match(/[^[\]]+(?=])/g);
            widgetContent.addClass(a[0]);
            if(a[0].toLowerCase() === "socialcounter") {
              var content = '';
              var c = a.length;
              for(i=1; i<c; i+=3) {
                var content = content + '<li class="social_item-wrapper"><a href="'+ a[i+1] +'" class="social_item social_'+ a[i] +'"><i class="fa fa-'+ a[i] +' social_icon"></i><span class="social_num">'+ a[i+2] +'</span></a></li>' 
                }     
              widgetContent.html('<ul class="social-counter">' +  content + '</ul>');
            } else if(a[0].toLowerCase() === "slideshow") {
              widgetContent.attr("id", "slideshow" + "s" + index);
              $.ajax({
                url: "/feeds/posts/default/-/"+ a[1] +"?alt=json-in-script&max-results="+ slideshowPostsNum +"",
                type: "get",
                dataType: "jsonp",
                success: function (e) {
                  var img = new Array();
                  var trtd = '';
                  var numOfEntries = e.feed.entry.length;
                  for (var i = numOfEntries-1; i > -1; i--) {
                    var entry = e.feed.entry[i];
                    var posttitle = entry.title.$t;
                    var posturl;
                    for (var k = 0; k < entry.link.length; k++) {
                      if (entry.link[k].rel == 'alternate') {
                        posturl = entry.link[k].href;
                        break;
                      }
                    }
                    if ("content" in entry) {
                      var postcontent = entry.content.$t;
                    }
                    s = postcontent; a = s.indexOf("<img"); b = s.indexOf("src=\"",a); c = s.indexOf("\"",b+5); d = s.substr(b+5,c-b-5);
                    if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                      img[i] = d;
                      var post_image = img[i];
                    } else {
                      var post_image = no_image_url;
                    }
                    var summary = postcontent.replace(/<.+?>/g, '').substring(0, 90).trim() + "...";
                    if(i === 0){
                      var trtd = trtd + '<li class="slideshow-post active-slide"><a href="'+ posturl +'" class="post-image" style="background: url('+ post_image +') no-repeat center;background-size: cover"></a><div class="title-summary-wrapper"><a href="'+ posturl +'" class="post-title"><h3 class="heading anchor-hover">'+ posttitle +'</h3></a><p class="post-summary">'+ summary +'</p></div></li>';
                    } else {
                      var trtd = trtd + '<li class="slideshow-post"><a href="'+ posturl +'" class="post-image" style="background: url('+ post_image +') no-repeat center;background-size: cover"></a><div class="title-summary-wrapper"><a href="'+ posturl +'" class="post-title"><h3 class="heading anchor-hover">'+ posttitle +'</h3></a><p class="post-summary">'+ summary +'</p></div></li>';
                    }
                  }
                  var arrowsCode = '<span class="right-arrow arrow"><i class="fa fa-chevron-right"></i></span><span class="left-arrow arrow"><i class="fa fa-chevron-left"></i></span>';
                  widgetContent.html(arrowsCode + '<ul class="slideshow-posts-wrapper">' + trtd + '</ul>');
                  var slideShow = $("#slideshows"+index+"");
                  var right = slideShow.children(".right-arrow");
                  var left = slideShow.children(".left-arrow");
                  var activeSlide;
                  var postsWrapper;
                  function slideshowL() {
                    postsWrapper = $(this).siblings(".slideshow-posts-wrapper");
                    activeSlide = postsWrapper.children(".active-slide");
                    if(activeSlide.index() === 0) {
                      activeSlide.addClass("fadeOut").removeClass("fadeIn active-slide");
                      postsWrapper.children(".slideshow-post").eq(numOfEntries-1).addClass("active-slide fadeIn").removeClass("fadeOut");
                    } else {
                      activeSlide.addClass("fadeOut").removeClass("fadeIn active-slide");
                      activeSlide.prev().addClass("active-slide fadeIn").removeClass("fadeOut");
                    } 
                  }
                  function slideshowR() {
                    postsWrapper = $(this).siblings(".slideshow-posts-wrapper");
                    activeSlide = postsWrapper.children(".active-slide");
                    if(activeSlide.index() === numOfEntries-1) {
                      activeSlide.addClass("fadeOut").removeClass("fadeIn active-slide");
                      postsWrapper.children(".slideshow-post").eq(0).addClass("active-slide fadeIn").removeClass("fadeOut");
                    } else {
                      activeSlide.addClass("fadeOut").removeClass("fadeIn active-slide");
                      activeSlide.next().addClass("fadeIn active-slide").removeClass("fadeOut");
                    }
                  }
                  right.on("click", slideshowL);
                  left.on("click", slideshowR);
                  /*
            var arr;
            var height;
            var maxHeight = 0;
            var imageHeight;
            var wrapperHeight;
            var slideshowPosts = slideShow.find(".slideshow-post");
            slideshowPosts.each(function(){
              var _self = $(this);
              imageHeight = _self.children(".post-image").outerHeight();
              wrapperHeight = _self.children(".title-summary-wrapper").outerHeight();
              height = imageHeight + wrapperHeight;
              if(height > maxHeight) {
                maxHeight = height;
              }
            });
            slideShow.css("height", maxHeight);
            function autoPlaySlideshow() {
              slideshowAutoPlay = setInterval (function (){
                postsWrapper = slideShow.find(".slideshow-posts-wrapper");
                activeSlide = postsWrapper.children(".active-slide");
                if(activeSlide.index() === numOfEntries-1) {
                  activeSlide.addClass("fadeOut").removeClass("fadeIn").removeClass("active-slide");
                  postsWrapper.children(".slideshow-post").eq(0).addClass("fadeIn").removeClass("fadeOut").addClass("active-slide");
                } else {
                  activeSlide.addClass("fadeOut").removeClass("fadeIn").removeClass("active-slide");
                  activeSlide.next().addClass("fadeIn").removeClass("fadeOut").addClass("active-slide");
                }
              }, 3000);
            };
            autoPlaySlideshow();
            slideShow.on("mouseenter", function () {
              clearInterval(slideshowAutoPlay);
            });
            slideShow.on("mouseleave", autoPlaySlideshow);
*/
                }
              });
            } else if(a[0] === "verticalposts" || a[0] === "vertical posts") {
              $.ajax({
                url: "/feeds/posts/default/-/"+ a[1] +"?alt=json-in-script&max-results="+ verticalPostsNum +"",
                type: "get",
                dataType: "jsonp",
                success: function (e) {
                  var img = new Array();
                  var trtd = '';
                  var numOfEntries = e.feed.entry.length;
                  for (var i = 0; i < numOfEntries; i++) {
                    var entry = e.feed.entry[i];
                    var posttitle = entry.title.$t;
                    var posturl;
                    for (var k = 0; k < entry.link.length; k++) {
                      if (entry.link[k].rel == 'alternate') {
                        posturl = entry.link[k].href;
                        break;
                      }
                    }
                    if ("content" in entry) {
                      var postcontent = entry.content.$t;
                    }
                    s = postcontent; a = s.indexOf("<img"); b = s.indexOf("src=\"",a); c = s.indexOf("\"",b+5); d = s.substr(b+5,c-b-5);
                    if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                      img[i] = d;
                      var post_image = img[i];
                    } else {
                      var post_image = no_image_url;
                    }
                    var trtd = trtd + '<li class="vertical-post clearfix"><a href="'+ posturl +'" class="post-image" style="background: url('+ post_image +') no-repeat center;background-size: cover"></a><a href="'+ posturl +'"><h3 class="post-title anchor-hover">'+ posttitle +'</h3></a></li>';
                  }
                  widgetContent.html("<ul class='vertical-posts-wrapper'>" + trtd + "</ul>");
                }
              });
            }
          }
        });
        /*---- Add the sub headline to "follow by email" widget ----*/
        var f = $(".FollowByEmail .widget-content");
        if(f.length) {
          f.prepend("<p class='subhead'>"+ followByEmailMessage +"</p>");
        }
        /*---- Remove the paranthesis in the List Label widget ----*/
        var l = $(".list-label-widget-content li span");
        if(l.length) {
          var s;
          var a;
          l.each(function (){
            var _self = $(this);
            s = _self.text().trim();
            a = s.replace(/\D/g, "");
            _self.text(a);
          });
        }
        //]]>
      </script>
      <!-- Sidebar AJAX Requests -->
      <script>
        //<![CDATA[
        $(function(){
          var tabsWrapper = $(".sidebartabs-wrapper");    
          var tabWidget = tabsWrapper.find(".widget");    
          var tabs = $(".sidebartab-item");
          tabsWrapper.each(function(){
            var _self = $(this),
                s = _self.find(".widget");
            if (s.length < 2) {
              _self.remove();
            } 
            else
            {
              var widgetsTitle = s.children("h2");
              var tabItems = _self.find(".sidebartab-item");    
              var len = tabItems.length;
              for(var i=0; i < len; i++) {
                tabItems.eq(i).html(widgetsTitle.eq(i).text());
              }
            }    
          });
          tabs.on("click", function (e) {
            var _self = $(this),
                index = tabs.index(_self);
            _self.addClass("activetab"); 
            _self.siblings().removeClass("activetab");
            tabWidget.eq(index).addClass("show").removeClass("hide");
            tabWidget.eq(index).siblings().addClass("hide").removeClass("show"); 
          });
        });
        // ]]>
      </script>
      <!-- sidebar tabs -->
    </b:if>
    <b:if cond='data:blog.url == data:blog.homepageUrl'>
      <script>
        //<![CDATA[
        if(showPagination){$("#blog-pager").addClass("hide");$.ajax({url:"/feeds/posts/default?alt=json-in-script&max-results=10000",type:"get",dataType:"jsonp",success:function(e){var numOfEntries=e.feed.entry.length;var postOuter=$(".post-outer");var postOuterLength=postOuter.length;var len=postOuterLength;var numOfPages=Math.ceil(numOfEntries/postOuterLength);if(numOfPages!==1){var entryWanted=e.feed.entry[postOuterLength-1];var pd=entryWanted.published.$t.replace(/\.\d*/,"");var code='<span class="pagination-item active-page">1</span><a class="pagination-item" href="/search?updated-max='+pd+'&max-results='+len+'">2</a>';var next='<a class="pagination-cont" href="/search?updated-max='+pd+'&max-results='+len+'">«· «·Ì</a>';var div='<div class="pagination">';for(var i=0;i<numOfPages-2;i++){postOuterLength=postOuterLength+len;entryWanted=e.feed.entry[postOuterLength-1];pd=entryWanted.published.$t.replace(/\.\d*/,"");if(i!==(numOfPages-3)){code=code+'<a class="pagination-item" href="/search?updated-max='+pd+'&max-results='+len+'">'+(i+3)+'</a>'}else{code=code+'<a class="pagination-item" href="/search?updated-max='+pd+'&max-results='+len+'">'+(i+3)+'</a></div>'}}$(".Blog").append(div+code)}var p=$(".pagination");p.append(next);var pages=$(".pagination-item");if(pages.length>=12){var thirdPage=$(".pagination-item").eq(2);var dots="<span id='pDots'>...  </span>";pages.addClass("hide");thirdPage.after(dots);for(var i=0;i<3;i++){pages.eq(i).removeClass("hide")}pages.eq(length-2).removeClass("hide");pages.eq(length-1).removeClass("hide")}},error:function(){$("#blog-pager").removeClass("hide")}})}
        //]]>
      </script>
      <!-- Homepage Pagination -->
    </b:if>
    <b:if cond='data:blog.pageType == &quot;index&quot; and data:blog.url != data:blog.homepageUrl'>
 <script type='text/javascript'>
      /*<![CDATA[*/var postperpage=6;var numshowpage=6;var upPageWord="&#171; «·”«»ﬁ ";var downPageWord="«· «·Ì &#187;";var urlactivepage=location.href;var home_page="/";/*]]>*/</script>
    <script type='text/javascript'>
      //<![CDATA[
      var nopage;var jenis;var nomerhal;var lblname1;halamanblogger();function loophalaman(banyakdata){var html='';nomerkiri=parseInt(numshowpage/2);if(nomerkiri==numshowpage-nomerkiri){numshowpage=nomerkiri*2+1}mulai=nomerhal-nomerkiri;if(mulai<1)mulai=1;maksimal=parseInt(banyakdata/postperpage)+1;if(maksimal-1==banyakdata/postperpage)maksimal=maksimal-1;akhir=mulai+numshowpage-1;if(akhir>maksimal)akhir=maksimal;html+="<span class='showpageOf'>’›Õ… "+nomerhal+' „‰ '+maksimal+"</span>";var prevnomer=parseInt(nomerhal)-1;if(nomerhal>1){if(nomerhal==2){if(jenis=="page"){html+='<span class="showpage"><a href="'+home_page+'">'+upPageWord+'</a></span>'}else{html+='<span class="showpageNum"><a href="/search/label/'+lblname1+'?&max-results='+postperpage+'">'+upPageWord+'</a></span>'}}else{if(jenis=="page"){html+='<span class="showpageNum"><a href="#" onclick="redirectpage('+prevnomer+');return false">'+upPageWord+'</a></span>'}else{html+='<span class="showpageNum"><a href="#" onclick="redirectlabel('+prevnomer+');return false">'+upPageWord+'</a></span>'}}}if(mulai>1){if(jenis=="page"){html+='<span class="showpageNum"><a href="'+home_page+'">1</a></span>'}else{html+='<span class="showpageNum"><a href="/search/label/'+lblname1+'?&max-results='+postperpage+'">1</a></span>'}}if(mulai>2){html+=' ... '}for(var jj=mulai;jj<=akhir;jj++){if(nomerhal==jj){html+='<span class="showpagePoint">'+jj+'</span>'}else if(jj==1){if(jenis=="page"){html+='<span class="showpageNum"><a href="'+home_page+'">1</a></span>'}else{html+='<span class="showpageNum"><a href="/search/label/'+lblname1+'?&max-results='+postperpage+'">1</a></span>'}}else{if(jenis=="page"){html+='<span class="showpageNum"><a href="#" onclick="redirectpage('+jj+');return false">'+jj+'</a></span>'}else{html+='<span class="showpageNum"><a href="#" onclick="redirectlabel('+jj+');return false">'+jj+'</a></span>'}}}if(akhir<maksimal-1){html+='...'}if(akhir<maksimal){if(jenis=="page"){html+='<span class="showpageNum"><a href="#" onclick="redirectpage('+maksimal+');return false">'+maksimal+'</a></span>'}else{html+='<span class="showpageNum"><a href="#" onclick="redirectlabel('+maksimal+');return false">'+maksimal+'</a></span>'}}var nextnomer=parseInt(nomerhal)+1;if(nomerhal<maksimal){if(jenis=="page"){html+='<span class="showpageNum"><a href="#" onclick="redirectpage('+nextnomer+');return false">'+downPageWord+'</a></span>'}else{html+='<span class="showpageNum"><a href="#" onclick="redirectlabel('+nextnomer+');return false">'+downPageWord+'</a></span>'}}var pageArea=document.getElementsByName("pageArea");var blogPager=document.getElementById("blog-pager");for(var p=0;p<pageArea.length;p++){pageArea[p].innerHTML=html}if(pageArea&&pageArea.length>0){html=''}if(blogPager){blogPager.innerHTML=html}}function hitungtotaldata(root){var feed=root.feed;var totaldata=parseInt(feed.openSearch$totalResults.$t,10);loophalaman(totaldata)}function halamanblogger(){var thisUrl=urlactivepage;if(thisUrl.indexOf("/search/label/")!=-1){if(thisUrl.indexOf("?updated-max")!=-1){lblname1=thisUrl.substring(thisUrl.indexOf("/search/label/")+14,thisUrl.indexOf("?updated-max"))}else{lblname1=thisUrl.substring(thisUrl.indexOf("/search/label/")+14,thisUrl.indexOf("?&max"))}}if(thisUrl.indexOf("?q=")==-1&&thisUrl.indexOf(".html")==-1){if(thisUrl.indexOf("/search/label/")==-1){jenis="page";if(urlactivepage.indexOf("#PageNo=")!=-1){nomerhal=urlactivepage.substring(urlactivepage.indexOf("#PageNo=")+8,urlactivepage.length)}else{nomerhal=1}document.write("<script src=\""+home_page+"feeds/posts/summary?max-results=1&alt=json-in-script&callback=hitungtotaldata\"><\/script>")}else{jenis="label";if(thisUrl.indexOf("&max-results=")==-1){postperpage=20}if(urlactivepage.indexOf("#PageNo=")!=-1){nomerhal=urlactivepage.substring(urlactivepage.indexOf("#PageNo=")+8,urlactivepage.length)}else{nomerhal=1}document.write('<script src="'+home_page+'feeds/posts/summary/-/'+lblname1+'?alt=json-in-script&callback=hitungtotaldata&max-results=1" ><\/script>')}}}function redirectpage(numberpage){jsonstart=(numberpage-1)*postperpage;nopage=numberpage;var nBody=document.getElementsByTagName('head')[0];var newInclude=document.createElement('script');newInclude.type='text/javascript';newInclude.setAttribute("src",home_page+"feeds/posts/summary?start-index="+jsonstart+"&max-results=1&alt=json-in-script&callback=finddatepost");nBody.appendChild(newInclude)}function redirectlabel(numberpage){jsonstart=(numberpage-1)*postperpage;nopage=numberpage;var nBody=document.getElementsByTagName('head')[0];var newInclude=document.createElement('script');newInclude.type='text/javascript';newInclude.setAttribute("src",home_page+"feeds/posts/summary/-/"+lblname1+"?start-index="+jsonstart+"&max-results=1&alt=json-in-script&callback=finddatepost");nBody.appendChild(newInclude)}function finddatepost(root){post=root.feed.entry[0];var timestamp1=post.published.$t.substring(0,19)+post.published.$t.substring(23,29);var timestamp=encodeURIComponent(timestamp1);if(jenis=="page"){var alamat="/search?updated-max="+timestamp+"&max-results="+postperpage+"#PageNo="+nopage}else{var alamat="/search/label/"+lblname1+"?updated-max="+timestamp+"&max-results="+postperpage+"#PageNo="+nopage}location.href=alamat}
      //]]>
    </script>
      <!-- Index Pages Pagination -->
    </b:if>
    <b:if cond='data:blog.pageType == &quot;item&quot;'>
      <script>
        // <![CDATA[
        /* Related Posts
-----------------------------------------------------------*/
        var labels = $(".post-label-anchor"),
            labelsLength = labels.length,
            relatedPostsUL = $("#related-posts").children("ul");
        if(labelsLength) {
          var labelText;
          if(labelsLength === 1) {
            labelText = labels.text().trim();
            $.ajax({
              url: "/feeds/posts/default/-/"+ labelText +"?alt=json-in-script&max-results=100",
              type: 'get',
              dataType: "jsonp",
              success: function (data) {
                var posturl = "";
                var htmlcode = '';
                var numOfEntries = data.feed.entry.length;
                var numOfPostsToBeDisplayed;
                if(numOfEntries < 3) {
                  numOfPostsToBeDisplayed = numOfEntries;
                } else {
                  numOfPostsToBeDisplayed = 3;
                }
                var randomNumber;
                if(numOfEntries >= 4) {
                  randomNumber = [];
                  for(var a = 0; a < numOfEntries; a++) {
                    randomNumber[a] = a;
                  }
                }
                var c = 0;
                for (var i = 0; i < numOfPostsToBeDisplayed ; i++) {
                  var entry,
                      entryToBeChoosen;
                  if(numOfEntries > 3){
                    entryToBeChoosen = randomNumber.splice(Math.floor(Math.random() * (numOfEntries - c)), 1);
                    entry = data.feed.entry[entryToBeChoosen];
                    c += 1;
                  } else {
                    entry = data.feed.entry[i];
                  }
                  var posttitle = entry.title.$t;
                  var entryTitle = $(".entry-title").text().toLowerCase().trim();
                  if(numOfEntries > 3 && entryTitle === posttitle.toLowerCase()) {
                    entryToBeChoosen = randomNumber.splice(Math.floor(Math.random() * (numOfEntries - c - 1)), 1);
                    entry = data.feed.entry[entryToBeChoosen];
                    posttitle = entry.title.$t;
                    c += 2;
                  }
                  if((numOfEntries === 3 || numOfEntries === 2 ) && entryTitle === posttitle.toLowerCase()) {
                    i += 1;
                    entry = data.feed.entry[i];
                    posttitle = entry.title.$t;
                  }
                  for (var j = 0; j < entry.link.length; j++) {
                    if (entry.link[j].rel == "alternate") {
                      posturl = entry.link[j].href;
                      break
                    }
                  }
                  var content = entry.content.$t;
                  var $content = $('<div>').html(content);
                  if (content.indexOf("http://www.youtube.com/embed/") > -1 || content.indexOf("https://www.youtube.com/embed/") > -1) {
                    var src2 = entry.media$thumbnail.url;
                    var thumb = '<a class="related-post-img" href="' + posturl + '" style="background:url(' + src2 + ') no-repeat center center;background-size: cover"/>';
                  } else if (content.indexOf("<img") > -1) {
                    var src = $content.find('img:first').attr('src');
                    var thumb = '<a class="related-post-img" href="' + posturl + '" style="background:url(' + src + ') no-repeat center center;background-size: cover"/>';
                  } else {
                    var thumb = '<a class="related-post-img" href="' + posturl + '" style="background:url(' + no_image_url + ') no-repeat center center;background-size: cover"/>';
                  }
                  htmlcode = '<li class="related-post-item clearfix"><div class="related-thumb">' + thumb + '</div><h3 class="related-post-title"><a href="' + posturl + '">' + posttitle + '</a></h3></li>';
                  relatedPostsUL.append(htmlcode);
                }
                $('.related-post-img').each(function () {
                  $(this).attr('style', function (i, src) {
                    return src.replace('/default.jpg', '/mqdefault.jpg')
                  }).attr('style', function (i, src) {
                    return src.replace('s72-c', 's1600')
                  })
                });
              }
            });
          } else if(labelsLength === 2) {
            var theFirstLabel = labels.eq(0).text().trim();
            var theLastLabel = labels.eq(1).text().trim();
            $.ajax({
              url: "/feeds/posts/default/-/" + theFirstLabel + "?alt=json-in-script&max-results=100",
              type: 'get',
              dataType: "jsonp",
              success: function (data) {
                if(data.feed.entry.length < 3) {
                  $.ajax({
                    url: "/feeds/posts/default/-/" + theLastLabel + "?alt=json-in-script&max-results=100",
                    type: 'get',
                    dataType: "jsonp",
                    success: function (data) {
                      var posturl = "";
                      var htmlcode = '';
                      var numOfEntries = data.feed.entry.length;
                      var numOfPostsToBeDisplayed;
                      if(numOfEntries < 3) {
                        numOfPostsToBeDisplayed = numOfEntries;
                      } else {
                        numOfPostsToBeDisplayed = 3;
                      }
                      var randomNumber;
                      if(numOfEntries >= 4) {
                        randomNumber = [];
                        for(var a = 0; a < numOfEntries; a++) {
                          randomNumber[a] = a;
                        }
                      }
                      var c = 0;
                      for (var i = 0; i < numOfPostsToBeDisplayed ; i++) {
                        var entry,
                            entryToBeChoosen;
                        if(numOfEntries > 3){
                          entryToBeChoosen = randomNumber.splice(Math.floor(Math.random() * (numOfEntries - c)), 1);
                          entry = data.feed.entry[entryToBeChoosen];
                          c += 1;
                        } else {
                          entry = data.feed.entry[i];
                        }
                        var posttitle = entry.title.$t;
                        var entryTitle = $(".entry-title").text().toLowerCase().trim();
                        if(numOfEntries > 3 && entryTitle === posttitle.toLowerCase()) {
                          entryToBeChoosen = randomNumber.splice(Math.floor(Math.random() * (numOfEntries - c - 1)), 1);
                          entry = data.feed.entry[entryToBeChoosen];
                          posttitle = entry.title.$t;
                          c += 2;
                        }
                        if((numOfEntries === 3 || numOfEntries === 2 ) && entryTitle === posttitle.toLowerCase()) {
                          i += 1;
                          entry = data.feed.entry[i];
                          posttitle = entry.title.$t;
                        }
                        for (var j = 0; j < entry.link.length; j++) {
                          if (entry.link[j].rel == "alternate") {
                            posturl = entry.link[j].href;
                            break
                          }
                        }
                        var content = entry.content.$t;
                        var $content = $('<div>').html(content);
                        if (content.indexOf("http://www.youtube.com/embed/") > -1 || content.indexOf("https://www.youtube.com/embed/") > -1) {
                          var src2 = entry.media$thumbnail.url;
                          var thumb = '<a class="related-post-img" href="' + posturl + '" style="background:url(' + src2 + ') no-repeat center center;background-size: cover"/>';
                        } else if (content.indexOf("<img") > -1) {
                          var src = $content.find('img:first').attr('src');
                          var thumb = '<a class="related-post-img" href="' + posturl + '" style="background:url(' + src + ') no-repeat center center;background-size: cover"/>';
                        } else {
                          var thumb = '<a class="related-post-img" href="' + posturl + '" style="background:url(' + no_image_url + ') no-repeat center center;background-size: cover"/>';
                        }
                        htmlcode = '<li class="related-post-item clearfix"><div class="related-thumb">' + thumb + '</div><h3 class="related-post-title"><a href="' + posturl + '">' + posttitle + '</a></h3></li>';
                        relatedPostsUL.append(htmlcode);
                      }
                      $('.related-post-img').each(function () {
                        $(this).attr('style', function (i, src) {
                          return src.replace('/default.jpg', '/mqdefault.jpg')
                        }).attr('style', function (i, src) {
                          return src.replace('s72-c', 's1600')
                        })
                      });
                    }
                  });
                } else {
                  var posturl = "";
                  var htmlcode = '';
                  var numOfEntries = data.feed.entry.length;
                  var numOfPostsToBeDisplayed;
                  if(numOfEntries < 3) {
                    numOfPostsToBeDisplayed = numOfEntries;
                  } else {
                    numOfPostsToBeDisplayed = 3;
                  }
                  var randomNumber;
                  if(numOfEntries >= 4) {
                    randomNumber = [];
                    for(var a = 0; a < numOfEntries; a++) {
                      randomNumber[a] = a;
                    }
                  }
                  var c = 0;
                  for (var i = 0; i < numOfPostsToBeDisplayed ; i++) {
                    var entry,
                        entryToBeChoosen;
                    if(numOfEntries > 3){
                      entryToBeChoosen = randomNumber.splice(Math.floor(Math.random() * (numOfEntries - c)), 1);
                      entry = data.feed.entry[entryToBeChoosen];
                      c += 1;
                    } else {
                      entry = data.feed.entry[i];
                    }
                    var posttitle = entry.title.$t;
                    var entryTitle = $(".entry-title").text().toLowerCase().trim();
                    if(numOfEntries > 3 && entryTitle === posttitle.toLowerCase()) {
                      entryToBeChoosen = randomNumber.splice(Math.floor(Math.random() * (numOfEntries - c - 1)), 1);
                      entry = data.feed.entry[entryToBeChoosen];
                      posttitle = entry.title.$t;
                      c += 2;
                    }
                    if((numOfEntries === 3 || numOfEntries === 2 ) && entryTitle === posttitle.toLowerCase()) {
                      i += 1;
                      entry = data.feed.entry[i];
                      posttitle = entry.title.$t;
                    }
                    for (var j = 0; j < entry.link.length; j++) {
                      if (entry.link[j].rel == "alternate") {
                        posturl = entry.link[j].href;
                        break
                      }
                    }
                    var content = entry.content.$t;
                    var $content = $('<div>').html(content);
                    if (content.indexOf("http://www.youtube.com/embed/") > -1 || content.indexOf("https://www.youtube.com/embed/") > -1) {
                      var src2 = entry.media$thumbnail.url;
                      var thumb = '<a class="related-post-img" href="' + posturl + '" style="background:url(' + src2 + ') no-repeat center center;background-size: cover"/>';
                    } else if (content.indexOf("<img") > -1) {
                      var src = $content.find('img:first').attr('src');
                      var thumb = '<a class="related-post-img" href="' + posturl + '" style="background:url(' + src + ') no-repeat center center;background-size: cover"/>';
                    } else {
                      var thumb = '<a class="related-post-img" href="' + posturl + '" style="background:url(' + no_image_url + ') no-repeat center center;background-size: cover"/>';
                    }
                    htmlcode = '<li class="related-post-item clearfix"><div class="related-thumb">' + thumb + '</div><h3 class="related-post-title"><a href="' + posturl + '">' + posttitle + '</a></h3></li>';
                    relatedPostsUL.append(htmlcode);
                  }
                  $('.related-post-img').each(function () {
                    $(this).attr('style', function (i, src) {
                      return src.replace('/default.jpg', '/mqdefault.jpg')
                    }).attr('style', function (i, src) {
                      return src.replace('s72-c', 's1600')
                    })
                  });
                } // else if (data.feed.entry.length >= 2)           
              } // theFirstLabel success function
            }); // theFirstLabel ajax request
          } else if (labelsLength >= 3) {
            var label1 = labels.eq(0).text().trim(),
                label2 = labels.eq(1).text().trim(),
                label3 = labels.eq(2).text().trim();
            $.ajax({
              url: "/feeds/posts/default/-/"+ label1 +"?alt=json-in-script&max-results=100",
              type: 'get',
              dataType: "jsonp",
              success: function (data) {
                var entry,
                    posturl = "",
                    entryToBeChoosen,
                    numOfEntries = data.feed.entry.length;
                if (numOfEntries > 1) {
                  entryToBeChoosen = Math.floor(Math.random() * numOfEntries);
                  entry = data.feed.entry[entryToBeChoosen];
                } else {
                  entry = data.feed.entry[0];
                }
                var posttitle = entry.title.$t;
                var entryTitle = $(".entry-title").text().toLowerCase().trim();
                if(numOfEntries > 1 && entryTitle === posttitle.toLowerCase()) {
                  if(entryToBeChoosen === 0) {
                    entryToBeChoosen = Math.floor((Math.random() * (numOfEntries-1) + 1));
                    entry = data.feed.entry[entryToBeChoosen];
                  } else {
                    entry = data.feed.entry[0];
                  }
                  posttitle = entry.title.$t;
                }
                for (var j = 0; j < entry.link.length; j++) {
                  if (entry.link[j].rel == "alternate") {
                    posturl = entry.link[j].href;
                    break
                  }
                }
                var content = entry.content.$t;
                var $content = $('<div>').html(content);
                if (content.indexOf("http://www.youtube.com/embed/") > -1 || content.indexOf("https://www.youtube.com/embed/") > -1) {
                  var src2 = entry.media$thumbnail.url;
                  var thumb = '<a class="related-post-img" href="'+ posturl +'" style="background:url('+ src2 +') no-repeat center center;background-size: cover"/>'
                  } else if (content.indexOf("<img") > -1) {
                    var src = $content.find('img:first').attr('src');
                    var thumb = '<a class="related-post-img" href="'+ posturl +'" style="background:url('+ src +') no-repeat center center;background-size: cover"/>'
                    } else {
                      var thumb = '<a class="related-post-img" href="'+ posturl +'" style="background:url('+ no_image_url +') no-repeat center center;background-size: cover"/>'
                      }
                var htmlcode = '<li class="related-post-item clearfix"><div class="related-thumb">'+ thumb +'</div><h3 class="related-post-title"><a href="'+ posturl +'">'+ posttitle +'</a></h3></li>'
                $('.related-post-img').each(function () {
                  $(this).attr('style', function (i, src) {
                    return src.replace('/default.jpg', '/mqdefault.jpg')
                  }).attr('style', function (i, src) {
                    return src.replace('s72-c', 's1600')
                  })
                });
                relatedPostsUL.append(htmlcode);
                $.ajax({
                  url: "/feeds/posts/default/-/"+ label2 +"?alt=json-in-script&max-results=100",
                  type: 'get',
                  dataType: "jsonp",
                  success: function (data) {
                    var entry,
                        posturl = "",
                        entryToBeChoosen,
                        numOfEntries = data.feed.entry.length;
                    if (numOfEntries > 1) {
                      entryToBeChoosen = Math.floor(Math.random() * numOfEntries);
                      entry = data.feed.entry[entryToBeChoosen];
                    } else {
                      entry = data.feed.entry[0];
                    }
                    var posttitle = entry.title.$t;
                    var entryTitle = $(".entry-title").text().toLowerCase().trim();
                    var prevEntryTitle = $(".related-post-title").eq(0).text().toLowerCase().trim();
                    var postT = posttitle.toLowerCase();
                    if(numOfEntries > 1 && entryTitle === postT) {
                      if(entryToBeChoosen === 0) {
                        entryToBeChoosen = Math.floor((Math.random() * (numOfEntries-1) + 1));
                        entry = data.feed.entry[entryToBeChoosen];
                      } else {
                        entry = data.feed.entry[0];
                      }
                      posttitle = entry.title.$t;
                    }
                    if(numOfEntries > 2 && (prevEntryTitle === postT && entryTitle !== postT) ){
                      if(entryToBeChoosen === 0) {
                        entryToBeChoosen = Math.floor((Math.random() * (numOfEntries-1) + 1));
                        entry = data.feed.entry[entryToBeChoosen];
                      } else {
                        entry = data.feed.entry[0];
                      }
                      posttitle = entry.title.$t;
                    }
                    for (var j = 0; j < entry.link.length; j++) {
                      if (entry.link[j].rel == "alternate") {
                        posturl = entry.link[j].href;
                        break
                      }
                    }
                    var content = entry.content.$t;
                    var $content = $('<div>').html(content);
                    if (content.indexOf("http://www.youtube.com/embed/") > -1 || content.indexOf("https://www.youtube.com/embed/") > -1) {
                      var src2 = entry.media$thumbnail.url;
                      var thumb = '<a class="related-post-img" href="'+ posturl +'" style="background:url('+ src2 +') no-repeat center center;background-size: cover"/>'
                      } else if (content.indexOf("<img") > -1) {
                        var src = $content.find('img:first').attr('src');
                        var thumb = '<a class="related-post-img" href="'+ posturl +'" style="background:url('+ src +') no-repeat center center;background-size: cover"/>'
                        } else {
                          var thumb = '<a class="related-post-img" href="'+ posturl +'" style="background:url('+ no_image_url +') no-repeat center center;background-size: cover"/>'
                          }
                    var htmlcode = '<li class="related-post-item clearfix"><div class="related-thumb">'+ thumb +'</div><h3 class="related-post-title"><a href="'+ posturl +'">'+ posttitle +'</a></h3></li>'
                    $('.related-post-img').each(function () {
                      $(this).attr('style', function (i, src) {
                        return src.replace('/default.jpg', '/mqdefault.jpg')
                      }).attr('style', function (i, src) {
                        return src.replace('s72-c', 's1600')
                      })
                    });
                    relatedPostsUL.append(htmlcode);
                    $.ajax({
                      url: "/feeds/posts/default/-/"+ label3 +"?alt=json-in-script&max-results=100",
                      type: 'get',
                      dataType: "jsonp",
                      success: function (data) {
                        var entry,
                            posturl = "",
                            entryToBeChoosen,
                            numOfEntries = data.feed.entry.length;
                        if (numOfEntries > 1) {
                          entryToBeChoosen = Math.floor(Math.random() * numOfEntries);
                          entry = data.feed.entry[entryToBeChoosen];
                        } else {
                          entry = data.feed.entry[0];
                        }
                        var posttitle = entry.title.$t;
                        var entryTitle = $(".entry-title").text().toLowerCase().trim();
                        var prevEntryTitle1 = $(".related-post-title").eq(0).text().toLowerCase().trim();
                        var prevEntryTitle2 = $(".related-post-title").eq(1).text().toLowerCase().trim();
                        var postT = posttitle.toLowerCase();
                        if(numOfEntries > 1 && (entryTitle === postT)) {
                          if(entryToBeChoosen === 0) {
                            entryToBeChoosen = Math.floor((Math.random() * (numOfEntries-1) + 1));
                            entry = data.feed.entry[entryToBeChoosen];
                          } else {
                            entry = data.feed.entry[0];
                          }
                          posttitle = entry.title.$t;
                        }
                        if(numOfEntries > 2 && ((entryTitle !== postT) && (prevEntryTitle1 === postT || prevEntryTitle2 === postT))) {
                          if(entryToBeChoosen === 0) {
                            entryToBeChoosen = Math.floor((Math.random() * (numOfEntries-1) + 1));
                            entry = data.feed.entry[entryToBeChoosen];
                          } else {
                            entry = data.feed.entry[0];
                          }
                          posttitle = entry.title.$t;
                        }
                        for (var j = 0; j < entry.link.length; j++) {
                          if (entry.link[j].rel == "alternate") {
                            posturl = entry.link[j].href;
                            break
                          }
                        }
                        var content = entry.content.$t;
                        var $content = $('<div>').html(content);
                        if (content.indexOf("http://www.youtube.com/embed/") > -1 || content.indexOf("https://www.youtube.com/embed/") > -1) {
                          var src2 = entry.media$thumbnail.url;
                          var thumb = '<a class="related-post-img" href="'+ posturl +'" style="background:url('+ src2 +') no-repeat center center;background-size: cover"/>'
                          } else if (content.indexOf("<img") > -1) {
                            var src = $content.find('img:first').attr('src');
                            var thumb = '<a class="related-post-img" href="'+ posturl +'" style="background:url('+ src +') no-repeat center center;background-size: cover"/>'
                            } else {
                              var thumb = '<a class="related-post-img" href="'+ posturl +'" style="background:url('+ no_image_url +') no-repeat center center;background-size: cover"/>'
                              }
                        var htmlcode = '<li class="related-post-item clearfix"><div class="related-thumb">'+ thumb +'</div><h3 class="related-post-title"><a href="'+ posturl +'">'+ posttitle +'</a></h3></li>'
                        $('.related-post-img').each(function () {
                          $(this).attr('style', function (i, src) {
                            return src.replace('/default.jpg', '/mqdefault.jpg')
                          }).attr('style', function (i, src) {
                            return src.replace('s72-c', 's1600')
                          })
                        });
                        relatedPostsUL.append(htmlcode);
                      }
                    }); // The third ajax request
                  }
                }); // The second ajax request
              }
            }); // The first ajax request
          } // else if (labelsLength >= 3)
        } // if(labelsLength)
        /***** Related posts functionality ******/
        $(function(){
          var windowWidth = $(window).width();
          if(windowWidth >= 800) {
            var a = $(".post-labels");
            var s = $("#related-posts");
            var c = $("#close-btn");
            $(document).on("scroll", function(){
              var scrollTop = $(window).scrollTop(),
                  elementOffset = a.offset().top,
                  distance = elementOffset - scrollTop;
              if(distance <= 850){
                s.addClass("slide-left");
              } else {
                s.removeClass("slide-left");
              }
            });
            c.on("click", function(){
              s.removeClass("slide-left");
              $(document).off();
            });
          }
        });
        //]]>
      </script>
    </b:if>
    <script>
      //<![CDATA[
      $(function (){
        var theLabel = $("#main-nav li a");
        theLabel.each( function (f) {
          var _self = $(this);
          var labelName = _self.text()
          var mega = _self.attr("href");
          if(mega === "mega") {
            var megaListItem = _self.parent();
            _self.addClass("mega-icon");
            _self.attr("href", "/search/label/"+ labelName +"?&max-results=10");
            var listIcon = labelName.match(/<.*>/g);
            labelName.replace(/<.*>/g, '');
            if(window.innerWidth > 960) {
              $.ajax({
                url: "/feeds/posts/default/-/" + labelName + "?alt=json-in-script&max-results=4",
                type: "get",
                dataType: "jsonp",
                success: function (e) {
                  var img  = new Array();
                  var trtd = '';
                  var numOfEntries = e.feed.entry.length;
                  for (var i = 0; i < numOfEntries; i++) {
                    var entry = e.feed.entry[i];
                    var posttitle = entry.title.$t;
                    var posturl;
                    for (var k = 0; k < entry.link.length; k++) {
                      if (entry.link[k].rel == 'alternate') {
                        posturl = entry.link[k].href;
                        break;
                      }
                    }
                    if ("content" in entry) {
                      var postcontent = entry.content.$t;
                    }
                    s = postcontent; a = s.indexOf("<img"); b = s.indexOf("src=\"",a); c = s.indexOf("\"",b+5); d = s.substr(b+5,c-b-5);
                    if((a!=-1)&&(b!=-1)&&(c!=-1)&&(d!="")) img[i] = d;
                    var tmb = img[i].replace('s1600/','s500-c/');
                    var trtd = trtd + '<li class="mega-post clearfix"><a href="'+ posturl +'" class="mega_post-image" style="background: url('+ tmb +') no-repeat center;background-size: cover"></a><a href="'+ posturl +'"><h3 class="mega_post-title">'+ posttitle +'</h3></a></li>';
                  }
                  megaListItem.append('<div class="mega-menu-wrapper"><ul class="mega-menu clearfix">' + trtd + '</ul></div>');  
                }
              });
            }
          }
        });
      });
      //]]>
    </script>
    <!-- Mega menu script -->
    <script>
      //<![CDATA[
      /* Footer Widgets
--------------------------------------*/
      $("#footer-wrapper .HTML").each(function () {
        var widget = $(this);
        var widgetContent = widget.children(".widget-content");
        var widgetContentText = widgetContent.text().trim();
        var wct = widgetContentText.toLowerCase();
        if((wct === "randomposts1") || (wct === "random posts1")) {
          widgetContent.addClass("randomposts1");
          $.ajax({
            url: "/feeds/posts/default?alt=json-in-script",
            type: "get",
            dataType: "jsonp",
            success: function (e) {
              var entryLength = e.feed.entry.length,
                  a = entryLength - footerRandomPostsNum,
                  n = Math.floor(Math.random() * (a + 1));
              $.ajax({
                url: "/feeds/posts/default?alt=json-in-script&end-index=" + n + "",
                type: "get",
                dataType: "jsonp",
                success: function (e) {
                  var img  = new Array();
                  var trtd = '';
                  for (var i = 0; i < footerRandomPostsNum; i++) {
                    var entry = e.feed.entry[n+i];
                    var posttitle = entry.title.$t;
                    var posturl;
                    var post_comments;
                    var comment_url;
                    for (var k = 0; k < entry.link.length; k++) {
                      if (entry.link[k].rel == 'alternate') {
                        posturl = entry.link[k].href;
                        break;
                      }
                    }
                    for (var k = 0; k < entry.link.length; k++) {
                      if ((entry.link[k].rel === 'replies') && (entry.link[k].type === 'text/html')) {
                        post_comments = entry.link[k].title;
                        comment_url = entry.link[k].href;
                        break;
                      }
                    } 
                    if ("content" in entry) {
                      var postcontent = entry.content.$t;
                    }
                    s = postcontent; a = s.indexOf("<img"); b = s.indexOf("src=\"",a); c = s.indexOf("\"",b+5); d = s.substr(b+5,c-b-5);
                    if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                      img[n] = d;
                      var post_image = img[n];
                    } else {
                      var post_image = no_image_url;
                    }
                    var trtd = trtd + '<li class="post-wrapper clearfix"><a href="'+ posturl +'" class="random_post-image" style="background: url('+ post_image +') no-repeat center;background-size: cover"></a><a href="'+ posturl +'"><h3 class="random_post-title">'+ posttitle +'</h3></a><a href="'+ comment_url +'" class="post-comments"><i class="fa fa-comment-o icon"></i>'+ post_comments +'</a></li>';
                  }
                  widgetContent.html('<ul class="random-posts">' + trtd + '</ul>'); 
                }
              });
            }
          });
        } else if((wct === "randomposts2") || (wct === "random posts2")) {
          widgetContent.addClass("randomposts2");
          $.ajax({
            url: "/feeds/posts/default?alt=json-in-script",
            type: "get",
            dataType: "jsonp",
            success: function (e) {
              var entryLength = e.feed.entry.length,
                  a = entryLength - footerRandomPostsNum,
                  n = Math.floor(Math.random() * (a + 1));
              $.ajax({
                url: "/feeds/posts/default?alt=json-in-script&end-index=" + n + "",
                type: "get",
                dataType: "jsonp",
                success: function (e) {
                  var img  = new Array();
                  var trtd = '';
                  for (var i = 0; i < footerRandomPostsNum; i++) {
                    var entry = e.feed.entry[n+i];
                    var posttitle = entry.title.$t;
                    var posturl;
                    for (var k = 0; k < entry.link.length; k++) {
                      if (entry.link[k].rel == 'alternate') {
                        posturl = entry.link[k].href;
                        break;
                      }
                    }
                    if ("content" in entry) {
                      var postcontent = entry.content.$t;
                    }
                    s = postcontent; a = s.indexOf("<img"); b = s.indexOf("src=\"",a); c = s.indexOf("\"",b+5); d = s.substr(b+5,c-b-5);
                    if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                      img[n] = d;
                      var post_image = img[n];
                    } else {
                      var post_image = no_image_url;
                    }
                    var summary = postcontent.replace(/<.+?>/g, '').substring(0, 90).trim() + "...";
                    var trtd = trtd + '<li class="post-wrapper clearfix"><a href="'+ posturl +'" class="post-image" style="background: url('+ post_image +') no-repeat center;background-size: cover"></a><div class="title-summary-wrapper"><a href="'+ posturl +'" class="post-title"><h3 class="heading">'+ posttitle +'</h3></a><p class="post-summary">'+ summary +'</p></div></li>';
                  }
                  widgetContent.html('<ul class="random-posts">' + trtd + '</ul>');
                }
              });
            }
          });
        } else if((wct === "recentposts1") || (wct === "recent posts1")) {
          widgetContent.addClass("recentposts1");
          $.ajax({
            url: "/feeds/posts/default?alt=json-in-script&max-results="+ footerRecentPostsNum +"",
            type: "get",
            dataType: "jsonp",
            success: function (e) {
              var img = new Array();
              var trtd = '';
              var numOfEntries = e.feed.entry.length;
              for (var i = 0; i < numOfEntries; i++) {
                var entry = e.feed.entry[i];
                var posttitle = entry.title.$t;
                var posturl;
                for (var k = 0; k < entry.link.length; k++) {
                  if (entry.link[k].rel == 'alternate') {
                    posturl = entry.link[k].href;
                    break;
                  }
                } 
                if ("content" in entry) {
                  var postcontent = entry.content.$t;
                }
                s = postcontent;
                a = s.indexOf("<img");
                b = s.indexOf("src=\"", a);
                c = s.indexOf("\"", b + 5);
                d = s.substr(b + 5, c - b - 5);
                if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                  img[i] = d;
                  var post_image = img[i];
                } else {
                  var post_image = no_image_url;
                }
                var trtd = trtd + '<li class="recent-post-item"><a href="'+ posturl +'" class="post-image" style="background: url('+ post_image +') no-repeat center; background-size: cover;"></a><a href="'+ posturl +'" class="post-title"><h2 class="heading">'+ posttitle +'</h2></a></li>';
              }
              widgetContent.html("<ul class='recent-posts-wrapper'>" + trtd + "</ul>");
            }
          });
        } else if((wct === "recentposts2") || (wct === "recent posts2")) {
          widgetContent.addClass("recentposts2");
          $.ajax({
            url: "/feeds/posts/default?alt=json-in-script&max-results="+ footerRecentPostsNum +"",
            type: "get",
            dataType: "jsonp",
            success: function (e) {
              var img = new Array();
              var trtd = '';
              var numOfEntries = e.feed.entry.length;
              for (var i = 0; i < numOfEntries; i++) {
                var entry = e.feed.entry[i];
                var posttitle = entry.title.$t;
                var posturl;
                for (var k = 0; k < entry.link.length; k++) {
                  if (entry.link[k].rel == 'alternate') {
                    posturl = entry.link[k].href;
                    break;
                  }
                }
                if ("content" in entry) {
                  var postcontent = entry.content.$t;
                }
                s = postcontent; a = s.indexOf("<img"); b = s.indexOf("src=\"",a); c = s.indexOf("\"",b+5); d = s.substr(b+5,c-b-5);
                if ((a != -1) && (b != -1) && (c != -1) && (d != "")) {
                  img[i] = d;
                  var post_image = img[i];
                } else {
                  var post_image = no_image_url;
                }
                var summary = postcontent.replace(/<.+?>/g, '').substring(0, 90).trim() + "...";
                var trtd = trtd + '<li class="post-wrapper clearfix"><a href="'+ posturl +'" class="post-image" style="background: url('+ post_image +') no-repeat center;background-size: cover"></a><div class="title-summary-wrapper"><a href="'+ posturl +'" class="post-title"><h3 class="heading">'+ posttitle +'</h3></a><p class="post-summary">'+ summary +'</p></div></li>';
              }
              widgetContent.html("<ul class='recent-posts-wrapper'>" + trtd + "</ul>");
            }
          });
        }
      });
      //]]>
    </script>
    <!-- Footer Widgets -->
    <script>
      //<![CDATA[
      $(function (){
        var b = $("#logo-and-ad-container .HTML");
        var t = b.children(".widget-content");
        if(t.text().trim() === "") {
          b.addClass("hide");
        }
      });
      //]]>
    </script>
    <script>
      //<![CDATA[
      $(function (){
        var v = $("#main-nav").find("ul");
        var f = false;
        v.on("click", function () {
          if(v.height() > 0) {
            if(!f) {
              v.css("height", "auto");
              f = true;
            } else {
              v.css("height", "50px");
              f = false;
            }
          }
        });
        var bars = $(".top-nav-icon");
        var navMenu = $(".top-nav-wrapper .widget:first-child ul");
        bars.on("click", function () {
          navMenu.slideToggle();
        });
      });
      //]]>
    </script>
    <!-- Main Menu click event -->
  </body>
</html>