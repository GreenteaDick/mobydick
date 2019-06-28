<?php ?>
<!doctype html>
<html>
<head>
<meta charset='UTF-8'><meta name='viewport' content='width=device-width initial-scale=1'>
<title>01-HTML.md</title></head>
<body>
<h2>浏览器（显示）</h2>
<pre><code>浏览器是网页显示、运行的平台，常用的浏览器有IE、火狐（Firefox）、谷歌（Chrome）、Safari和Opera等。我们平时称为五大浏览器。
</code></pre>
<p>&nbsp;</p>
<h1>常见浏览器内核介绍</h1>
<pre><code>浏览器是网页运行的平台，常用的浏览器有IE、火狐（Firefox）、谷歌（Chrome）、Safari和Opera等。我们平时称为五大浏览器。
</code></pre>
<p>&nbsp;</p>
<h2>浏览器内核（理解）</h2>
<pre><code>浏览器内核又可以分成两部分：渲染引擎(layout engineer 或者 Rendering Engine)和 JS 引擎。
渲染引擎 它负责取得网页的内容（HTML、XML、图像等等）、整理讯息（例如加入 CSS 等），以及计算网页的显示方式，然后会输出至显示器或打印机。浏览器的内核的不同对于网页的语法解释会有不同，所以渲染的效果也不相同。
JS 引擎 则是解析 Javascript 语言，执行 javascript语言来实现网页的动态效果。

最开始渲染引擎和 JS 引擎并没有区分的很明确，后来 JS 引擎越来越独立，内核就倾向于只指渲染引擎。有一个网页标准计划小组制作了一个 ACID 来测试引擎的兼容性和性能。内核的种类很多，如加上没什么人使用的非商业的免费内核，可能会有10多种，但是常见的浏览器内核可以分这四种：Trident、Gecko、Blink、Webkit。
</code></pre>
<p>（1）Trident(IE内核) </p>
<p>国内很多的双核浏览器的其中一核便是 Trident，美其名曰 &quot;兼容模式&quot;。</p>
<p>代表： IE、傲游、世界之窗浏览器、Avant、腾讯TT、猎豹安全浏览器、360极速浏览器、百度浏览器等。</p>
<p>Window10 发布后，IE 将其内置浏览器命名为 Edge，Edge 最显著的特点就是新内核 EdgeHTML。</p>
<p>（2）Gecko(firefox) </p>
<p>Gecko(Firefox 内核)： Mozilla FireFox(火狐浏览器) 采用该内核，Gecko 的特点是代码完全公开，因此，其可开发程度很高，全世界的程序员都可以为其编写代码，增加功能。 可惜这几年已经没落了， 比如 打开速度慢、升级频繁、猪一样的队友flash、神一样的对手chrome。</p>
<p>（3） webkit(Safari)<br/></p>
<p> Safari 是苹果公司开发的浏览器，所用浏览器内核的名称是大名鼎鼎的 WebKit。</p>
<p> 现在很多人错误地把 webkit 叫做 chrome内核（即使 chrome内核已经是 blink 了），苹果感觉像被别人抢了媳妇，都哭晕再厕所里面了。</p>
<p> 代表浏览器：傲游浏览器3、 Apple Safari (Win/Mac/iPhone/iPad)、Symbian手机浏览器、Android 默认浏览器，</p>
<p>（4） Chromium/Blink(chrome) </p>
<p>   在 Chromium 项目中研发 Blink 渲染引擎（即浏览器核心），内置于 Chrome 浏览器之中。Blink 其实是 WebKit 的分支。 </p>
<p>​     大部分国产浏览器最新版都采用Blink内核。二次开发</p>
<p>（5） Presto(Opera) </p>
<p>  Presto（已经废弃） 是挪威产浏览器 opera 的 &quot;前任&quot; 内核，为何说是 &quot;前任&quot;，因为最新的 opera 浏览器早已将之抛弃从而投入到了谷歌怀抱了。<br/></p>
<pre><code>了解一点：
</code></pre>
<p>移动端的浏览器内核主要说的是系统内置浏览器的内核。</p>
<p>Android手机而言，使用率最高的就是Webkit内核，大部分国产浏览器宣称的自己的内核，基本上也是属于webkit二次开发。</p>
<p>iOS以及WP7平台上，由于系统原因，系统大部分自带浏览器内核，一般是Safari或者IE内核Trident的</p>
<h1>Web标准（重点）</h1>
<p>通过以上浏览器的内核不同，我们知道他们工作原理、解析肯定不同，显示就会有差别。</p>
<h2>Web 标准的好处</h2>
<p><em>1</em>、让Web的发展前景更广阔 
<em>2</em>、内容能被更广泛的设备访问
<em>3</em>、更容易被搜寻引擎搜索
<em>4</em>、降低网站流量费用
<em>5</em>、使网站更易于维护
<em>6</em>、提高页面浏览速度</p>
<h2>Web 标准构成</h2>
<p> Web标准不是某一个标准，而是由W3C和其他标准化组织制定的一系列标准的集合。</p>
<p>主要包括结构（Structure）、表现（Presentation）和行为（Behavior）三个方面。</p>
<pre><code>结构标准：结构用于对网页元素进行整理和分类，咱们主要学的是HTML。 最重要
表现标准：表现用于设置网页元素的版式、颜色、大小等外观样式，主要指的是CSS。
行为标准：行为是指网页模型的定义及交互的编写，咱们主要学的是 Javascript
</code></pre>
<p>理想状态我们的源码： .HTML    .css   .js </p>
<h1>HTML 初识</h1>
<p>HTML（英文Hyper Text Markup Language的缩写）中文译为“超文本标签语言”。是用来描述网页的一种语言。</p>
<p>所谓超文本，因为它可以加入图片、声音、动画、多媒体等内容，不仅如此，它还可以从一个文件跳转到另一个文件，与世界各地主机的文件连接。</p>
<pre><code class='language-html' lang='html'>&lt;h1&gt; 我是一个大标题 &lt;/h1&gt;
</code></pre>
<p>   注意：   体会 文本    标签    语言   几个词语</p>
<ul>
<li>HTML 指的是超文本标记语言 (<strong>H</strong>yper <strong>T</strong>ext <strong>M</strong>arkup <strong>L</strong>anguage)</li>
<li>HTML 不是一种编程语言，而是一种标记语言 (markup language)</li>
<li>标记语言是一套标记标签 (markup tag)</li>

</ul>
<p>总结： HTML 作用就是用标记标签来描述网页，把网页内容在浏览器中展示出来。 </p>
<p>用文字来描述网页标签</p>
<h2>HTML骨架格式</h2>
<p>日常生活的书信，我们要遵循共同的约定。 </p>
<p>同理：HTML 有自己的语言语法骨架格式：</p>
<pre><code class='language-html' lang='html'>&lt;HTML&gt;   
    &lt;head&gt;     
        &lt;title&gt;&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;
&lt;/HTML&gt;
</code></pre>
<p>&nbsp;</p>
<h2>HTML标签分类</h2>
<p>  在HTML页面中，带有“&lt; &gt;”符号的元素被称为HTML标签，如上面提到的 &lt;HTML&gt;、&lt;head&gt;、&lt;body&gt;都是HTML骨架结构标签。所谓标签就是放在“&lt; &gt;” 标签符中表示某个功能的编码命令，也称为HTML标签或 HTML元素</p>
<p>1.双标签</p>
<pre><code class='language-html' lang='html'>&lt;标签名&gt; 内容 &lt;/标签名&gt;
</code></pre>
<p>该语法中“&lt;标签名&gt;”表示该标签的作用开始，一般称为“开始标签（start tag）”，“&lt;/标签名&gt;” 表示该标签的作用结束，一般称为“结束标签（end tag）”。和开始标签相比，结束标签只是在前面加了一个关闭符“/”。</p>
<blockquote><pre><code class='language-html' lang='html'>比如 &lt;body&gt;我是文字  &lt;/body&gt;
</code></pre>
</blockquote>
<p>2.单标签</p>
<pre><code class='language-html' lang='html'>&lt;标签名 /&gt;
</code></pre>
<p>  单标签也称空标签，是指用一个标签符号即可完整地描述某个功能的标签。</p>
<blockquote><pre><code class='language-html' lang='html'>比如  &lt;br /&gt;
</code></pre>
</blockquote>
<h2>HTML标签关系</h2>
<p>标签的相互关系就分为两种：</p>
<p>1.嵌套关系</p>
<pre><code class='language-html' lang='html'>&lt;head&gt;  &lt;title&gt; &lt;/title&gt;  &lt;/head&gt;
</code></pre>
<p>2.并列关系</p>
<pre><code class='language-html' lang='html'>&lt;head&gt;&lt;/head&gt;
&lt;body&gt;&lt;/body&gt;
</code></pre>
<p>倡议： 如果两个标签之间的关系是嵌套关系，子元素最好缩进一个tab键的身位。如果是并列关系，最好上下对齐。</p>
<p>&nbsp;</p>
<p> </p>
<p>&nbsp;</p>
<h1>文档类型&lt;!DOCTYPE&gt;</h1>
<pre><code class='language-html' lang='html'>&lt;!DOCTYPE html&gt; 
</code></pre>
<p> 我们使用的是 html 5 的版本。  html有很多版本，那我们应该告诉用户和浏览器我们使用的版本号。</p>
<p>&lt;!DOCTYPE&gt; 标签位于文档的最前面，用于向浏览器说明当前文档使用哪种 HTML 或 XHTML 标准规范，必需在开头处使用&lt;!DOCTYPE&gt;标签为所有的XHTML文档指定XHTML版本和类型，只有这样浏览器才能按指定的文档类型进行解析。</p>
<p>注意：  一些老网站可能用的还是老版本的文档类型比如 XHTML之类的，但是我们学的是HTML5,而且HTML5的文档类型兼容很好(向下兼容的原则)，所以大家放心的使用HTML5的文档类型就好了。</p>
<h1>字符集</h1>
<p><meta charset="UTF-8" /></p>
<p>utf-8是目前最常用的字符集编码方式，常用的字符集编码方式还有gbk和gb2312。</p>
<p>gb2312 简单中文  包括6763个汉字</p>
<p>BIG5   繁体中文 港澳台等用</p>
<p>GBK包含全部中文字符    是GB2312的扩展，加入对繁体字的支持，兼容GB2312</p>
<p>UTF-8则包含全世界所有国家需要用到的字符</p>
<pre><code>记住一点，以后我们统统使用UTF-8 字符集, 这样就避免出现字符集不统一而引起乱码的情况了。
</code></pre>
<h1>HTML标签的语义化</h1>
<p>白话： 所谓标签语义化，就是指标签的含义。</p>
<h2>为什么要有语义化标签</h2>
<ol start='' >
<li>方便代码的阅读和维护</li>
<li>同时让浏览器或是网络爬虫可以很好地解析，从而更好分析其中的内容 </li>
<li>使用语义化标签会具有更好地搜索引擎优化 </li>

</ol>
<p>核心：合适的地方给一个最为合理的标签。</p>
<p>语义是否良好： 当我们去掉CSS之后，网页结构依然组织有序，并且有良好的可读性。</p>
<p>白话，一眼看去，就知道那个是重点，结构是什么，知道每块的内容是干啥的。</p>
<p>遵循的原则：先确定语义的HTML ，再选合适的CSS。</p>
<h1>HTML常用标签</h1>
<p> 首先 HTML和CSS是两种完全不同的语言，我们学的是结构，就只写HTML标签，认识标签就可以了。 不会再给结构标签指定样式了。</p>
<p> HTML标签有很多，这里我们学习最为常用的，后面有些较少用的，我们可以查下手册就可以了。 </p>
<h2>排版标签</h2>
<p>排版标签主要和css搭配使用，显示网页结构的标签，是网页布局最常用的标签。</p>
<h3>标题标签 (熟记)</h3>
<p> 单词缩写：  head   头部. 标题     title  文档标题</p>
<p>为了使网页更具有语义化，我们经常会在页面中用到标题标签，HTML提供了6个等级的标题，即</p>
<p> <h1>、<h2>、<h3>、<h4>、<h5>和<h6></p>
<pre><code>标题标签语义：  作为标题使用，并且依据重要性递减
</code></pre>
<p>其基本语法格式如下：</p>
<pre><code class='language-html' lang='html'>&lt;hn&gt;   标题文本   &lt;/hn&gt;
</code></pre>
<blockquote><p>注意：  h1 标签因为重要，尽量少用，不要动不动就向你扔了一个h1。 一般h1 都是给logo使用，或者页面中最重要标题信息。</p>
</blockquote>
<p>&nbsp;</p>
<h3>段落标签( 熟记)</h3>
<p>单词缩写：  paragraph  段落  [ˈpærəgræf]    无须记这个单词</p>
<p> 在网页中要把文字有条理地显示出来，离不开段落标签，就如同我们平常写文章一样，整个网页也可以分为若干个段落，而段落的标签就是</p>
<pre><code class='language-html' lang='html'>&lt;p&gt;  文本内容  &lt;/p&gt;
</code></pre>
<p>是HTML文档中最常见的标签，默认情况下，文本在一个段落中会根据浏览器窗口的大小自动换行。</p>
<h3>水平线标签(认识)</h3>
<p>单词缩写：  horizontal  横线    [ˌhɔrəˈzɑntl]    同上</p>
<p>在网页中常常看到一些水平线将段落与段落之间隔开，使得文档结构清晰，层次分明。这些水平线可以通过插入图片实现，也可以简单地通过标签来完成，<hr />就是创建横跨网页水平线的标签。其基本语法格式如下：</p>
<pre><code class='language-html' lang='html'>&lt;hr /&gt;是单标签
</code></pre>
<p> 在网页中显示默认样式的水平线。</p>
<p>&nbsp;</p>
<h3>换行标签(熟记)</h3>
<p>单词缩写：  break   打断 ,换行</p>
<p>在HTML中，一个段落中的文字会从左到右依次排列，直到浏览器窗口的右端，然后自动换行。如果希望某段文本强制换行显示，就需要使用换行标签</p>
<pre><code class='language-html' lang='html'>&lt;br /&gt;
</code></pre>
<p>这时如果还像在word中直接敲回车键换行就不起作用了。</p>
<h2>课堂一练</h2>
<p>关于标签下列说法正确的是 </p>
<p>(A) P1是段落标签</p>
<p>(B) H1 是标题标签</p>
<p>(C) Hr是换行标签</p>
<p>(D) Br 是一条直线</p>
<p> 2 关于标签下列说法不正确的是</p>
<p>(A) H标签有6个等级分别是<h1> <h2> <h3> <h4> <h5>和<h6></p>
<p>(B) h1到h6 文字从小到大 </p>
<p>(C) p标签一行只能放一个</p>
<p>(D) P是段落标签会给文字加上段落的语义</p>
<h3>div span标签(重点)</h3>
<p>div  span    是没有语义的     是我们网页布局主要的2个盒子     css+div</p>
<p>div 就是  division  的缩写   分割， 分区的意思  其实有很多div 来组合网页。</p>
<p>span, 跨度，跨距；范围  <br/></p>
<p>语法格式：</p>
<pre><code class='language-html' lang='html'>&lt;div&gt; 这是头部 &lt;/div&gt;    &lt;span&gt;今日价格&lt;/span&gt;
</code></pre>
<p>&nbsp;</p>
<h2>文本格式化标签(熟记)</h2>
<p>在网页中，有时需要为文字设置粗体、斜体或下划线效果，这时就需要用到HTML中的文本格式化标签，使文字以特殊的方式显示。</p>
<p><img src="media/tab.png" /></p>
<p>  b  i  s  u   只有使用 没有 强调的意思       strong   em  del   ins  语义更强烈</p>
<p>&nbsp;</p>
<h2>标签属性</h2>
<p><img src="media/ttt.jpg" width="300"  /></p>
<p>属性就是特性 比如 手机的颜色 手机的尺寸 ，总结就是手机的。。</p>
<p>手机的颜色是黑色   手机的尺寸是 8寸</p>
<p>水平线的长度是 200<br/></p>
<p>图片的宽度 是  300    键  值对</p>
<p>使用HTML制作网页时，如果想让HTML标签提供更多的信息，可以使用HTML标签的属性加以设置。其基本语法格式如下：</p>
<pre><code class='language-html' lang='html'>&lt;标签名 属性1=&quot;属性值1&quot; 属性2=&quot;属性值2&quot; …&gt; 内容 &lt;/标签名&gt;
</code></pre>
<p>&nbsp;</p>
<p>在上面的语法中，</p>
<p>1.标签可以拥有多个属性，必须写在开始标签中，位于标签名后面。</p>
<p>2.属性之间不分先后顺序，标签名与属性、属性与属性之间均以空格分开。</p>
<p>3.任何标签的属性都有默认值，省略该属性则取默认值。</p>
<p>采取  键值对 的格式   key=&quot;value&quot;  的格式<br/></p>
<p>比如:<br/></p>
<pre><code class='language-html' lang='html'>&lt;hr width=&quot;400&quot; /&gt;
</code></pre>
<p>属性  是 宽度<br/></p>
<p>值    是 400 </p>
<p>提倡：   尽量不使用 样式属性。   <img src="media/sm.jpg" /> </p>
<h2>图像标签img (重点)</h2>
<p>单词缩写：   image  图像</p>
<p>HTML网页中任何元素的实现都要依靠HTML标签，要想在网页中显示图像就需要使用图像标签，接下来将详细介绍图像标签<img />以及和他相关的属性。其基本语法格式如下：</p>
<p>该语法中src属性用于指定图像文件的路径和文件名，他是img标签的必需属性。</p>
<pre><code class='language-html' lang='html'>&lt;img src=&quot;图像URL&quot; /&gt;
</code></pre>
<p>&nbsp;</p>
<p><img src="media/img.png" /></p>
<p>&nbsp;</p>
<p><strong>当网页显示图片时,鼠标滑上图片显示文字描述是以下哪个属性*</strong>***</p>
<p>(A) 设置alt属性</p>
<p>(B) 设置title属性</p>
<p>(C) 设置href 属性</p>
<p>(D) 设置src 属性</p>
<p> </p>
<p><strong>2  在HTML中，使用<img>标签插入图像，下列选项关于<img>的src属性说法正确的是 </strong></p>
<p>(A) 用来设置图片的格式</p>
<p>(B) 用来设置图片的所在位置</p>
<p>(C) 用来设置鼠标指向图片时显示的文字</p>
<p>(D) 用来设置图片是否能正确显示 </p>
<p>&nbsp;</p>
<h2>链接标签(重点)</h2>
<p>单词缩写：  anchor 的缩写  [ˈæŋkə(r)] 。基本解释 锚, 铁锚 的</p>
<p>在HTML中创建超链接非常简单，只需用标签环绕需要被链接的对象即可，其基本语法格式如下：</p>
<pre><code class='language-html' lang='html'>&lt;a href=&quot;跳转目标&quot; target=&quot;目标窗口的弹出方式&quot;&gt;文本或图像&lt;/a&gt;
</code></pre>
<p>href：用于指定链接目标的url地址，当为标签应用href属性时，它就具有了超链接的功能。  Hypertext Reference的缩写。意思是超文本引用</p>
<p>target：用于指定链接页面的打开方式，其取值有<em>self和</em>blank两种，其中<em>self为默认值，</em>blank为在新窗口中打开方式。</p>
<p>注意：</p>
<p>1.外部链接 需要添加 http:// <a href='www.baidu.com' target='_blank' >www.baidu.com</a></p>
<p>2.内部链接 直接链接内部页面名称即可 比如 &lt; a href=&quot;index.html&quot;&gt; 首页 </a ></p>
<p>3.如果当时没有确定链接目标时，通常将链接标签的href属性值定义为“#”(即href=&quot;#&quot;)，表示该链接暂时为一个空链接。</p>
<p>4.不仅可以创建文本超链接，在网页中各种网页元素，如图像、表格、音频、视频等都可以添加超链接。</p>
<h3>锚点定位 （难点）</h3>
<p>通过创建锚点链接，用户能够快速定位到目标内容。
创建锚点链接分为两步：</p>
<pre><code class='language-html' lang='html'>1.使用“a href=”#id名&gt;“链接文本&quot;&lt;/a&gt;创建链接文本（被点击的）
  &lt;a href=&quot;#two&quot;&gt;   

2.使用相应的id名标注跳转目标的位置。
  &lt;h3 id=&quot;two&quot;&gt;第2集&lt;/h3&gt; 
</code></pre>
<h3>base 标签   基本的</h3>
<p>base 可以设置整体链接的打开状态 <br/></p>
<p>base 写到  <head>  </head>  之间</p>
<p>把所有的连接 都默认添加 target=&quot;_blank&quot;</p>
<p> <img src="media/base.png" /></p>
<h2>课堂一练</h2>
<p> 1在HTML中，关于a标签说法不正确的是（）</p>
<p>(A) a标签可以通过href属性跳转到另外一个页面</p>
<p>(B) a标签可以通过targer属性设置在是否在新窗口中打开</p>
<p>(C) a标签只能在当前页面设置锚点链接，让用户能够快速定位到目标内</p>
<p>(D) a标签可以通过href=&quot;#&quot;设置一个空链接</p>
<p>2如果想跳转到当前页面里名为show的锚点，下列写法是正确的</p>
<p>A  &lt; a href=&quot;.show&quot;&gt;跳转</a></p>
<p>B &lt; a href=&quot;#show&quot;&gt;跳转</a></p>
<p>C &lt; a href=&quot; show&quot;&gt;跳转</a></p>
<p>D &lt; a src=&quot; #show&quot;&gt;跳转</a></p>
<p> </p>
<p>3如果想跳转到同目录下的名为success.html文件里名为show的锚点，下列写法是正确的</p>
<p>(A) &lt; a href=&quot;success.html#show&quot;&gt;跳转</a></p>
<p>(B)  &lt; a href=&quot;#show&quot;&gt;跳转</a> </p>
<p>(C)  &lt; a href=&quot;success#show&quot;&gt;跳转</a>
(D) &lt; a src=&quot;success.html#show&quot;&gt;跳转</a></p>
<h2>特殊字符标签 （理解）</h2>
<p> <img src="media/zifu.png" /></p>
<h2>注释标签</h2>
<p>在HTML中还有一种特殊的标签——注释标签。如果需要在HTML文档中添加一些便于阅读和理解但又不需要显示在页面中的注释文字，就需要使用注释标签。其基本语法格式如下：
​      <br/></p>
<pre><code class='language-html' lang='html'>    &lt;!-- 注释语句 --&gt;   ctrl + /       或者 ctrl +shift + / 
</code></pre>
<p>注释内容不会显示在浏览器窗口中，但是作为HTML文档内容的一部分，也会被下载到用户的计算机上，查看源代码时就可以看到。</p>
<p>注释重要性：</p>
<p>&nbsp;</p>
<p><img src="media/zs.png" /></p>
<h1>路径(重点、难点)</h1>
<p><img src="media/dt.png" width="400" /></p>
<p><img src="media/lj.png" /></p>
<p>实际工作中，通常新建一个文件夹专门用于存放图像文件，这时再插入图像，就需要采用“路径”的方式来指定图像文件的位置。</p>
<p>根目录  当前目录 </p>
<p>&nbsp;</p>
<p>路径可以分为： 相对路径和绝对路径</p>
<p>&nbsp;</p>
<h2>相对路径</h2>
<p>以引用文件之网页所在位置为参考基础，而建立出的目录路径。因此，当保存于不同目录的网页引用同一个文件时，所使用的路径将不相同，故称之为相对路径。</p>
<ol start='' >
<li>图像文件和HTML文件位于同一文件夹：只需输入图像文件的名称即可，如&lt;img src=&quot;logo.gif&quot; /&gt;。</li>
<li>图像文件位于HTML文件的下一级文件夹：输入文件夹名和文件名，之间用“/”隔开，如&lt;img src=&quot;img/img01/logo.gif&quot; /&gt;。</li>
<li>图像文件位于HTML文件的上一级文件夹：在文件名之前加入“../” ，如果是上两级，则需要使用 “../ ../”，以此类推，如&lt;img src=&quot;../logo.gif&quot; /&gt;。</li>

</ol>
<p>&nbsp;</p>
<h2>绝对路径</h2>
<p>绝对路径以Web站点根目录为参考基础的目录路径。之所以称为绝对，意指当所有网页引用同一个文件时，所使用的路径都是一样的</p>
<p>“D:\web\img\logo.gif”，或完整的网络地址，例如“<a href='http://www.itcast.cn/images/logo.gif' target='_blank' >http://www.itcast.cn/images/logo.gif</a>”。</p>
<p>&nbsp;</p>
<h2>课堂一练</h2>
<p>1.<strong>在下面结构中，哪种写法可以在index页面中有输出img.gif</strong></p>
<p><img src='media/1512226080266.png' alt='1512226080266' /></p>
<p>(A) <img src=”../image/img.gif” /> 		</p>
<p>(B) <img src=”image/img.gif” /> </p>
<p>(C) <img src=”image../img.gif” />	</p>
<p>(D) <img src=”img.gif/image” /></p>
<p> </p>
<p><strong>2在下面结构中，哪种写法可以在index页面中有输出1.jpg</strong></p>
<p><img src='media/1512226099480.png' alt='1512226099480' /></p>
<p>(A) <img src=”../1/2/1.jpg” />		</p>
<p>(B) <img src=”/1/2/1.jpg” /></p>
<p>(C) <img src=”1/2/1.jpg” />	</p>
<p>(D) <img src=”1.jpg” /></p>
<p> </p>
<p>3在下面结构中哪种写法可以在index页面中有输出img.gif</p>
<p><img src='media/1512226121609.png' alt='1512226121609' /></p>
<p>(A) <img src=”demo/image/img.gif” /> 	</p>
<p>(B) <img src=”image/img.gif” /> </p>
<p>(C) <img src=”image../img.gif” />	</p>
<p>(D) <img src=”img.gif/image/demo” /></p>
<p> </p>
<h1>总结</h1>
<p>  每一天都有一个主题 我们HTML第一天的主题就是 &lt;认识标签&gt;</p>
<p>学HTML 之前 觉得 很神秘<br/></p>
<p><img src="media/z.png" /></p>
<p>等你学完之后忽然发现</p>
<p><img src="media/rh.jpg" width="615" /></p>
<p>&nbsp;</p>
<p>总结今天的思路贯穿线：</p>
<p><img src="media/a.png" width="1000" /></p>
<h1>列表标签</h1>
<p>什么是列表？</p>
<p><img src="media/list.png" /></p>
<p>把…制成表,以表显示</p>
<p>容器里面装载着文字或图表的一种形式，叫列表。</p>
<p>列表最大的特点就是  整齐 、整洁、 有序</p>
<h2>无序列表 ul （重点）</h2>
<p>无序列表的各个列表项之间没有顺序级别之分，是并列的。其基本语法格式如下：</p>
<pre><code class='language-html' lang='html'>&lt;ul&gt;
  &lt;li&gt;列表项1&lt;/li&gt;
  &lt;li&gt;列表项2&lt;/li&gt;
  &lt;li&gt;列表项3&lt;/li&gt;
  ......
&lt;/ul&gt;
</code></pre>
<p>比如下面这些，新闻是没有顺序的，不用排队，先到先得，后发布先显示。</p>
<p><img src="media/ul.png" /></p>
<p>脚下留心：</p>
<pre><code> 1. &lt;ul&gt;&lt;/ul&gt;中只能嵌套&lt;li&gt;&lt;/li&gt;，直接在&lt;ul&gt;&lt;/ul&gt;标签中输入其他标签或者文字的做法是不被允许的。
 2. &lt;li&gt;与&lt;/li&gt;之间相当于一个容器，可以容纳所有元素。
 3. 无序列表会带有自己样式属性，放下那个样式，一会让CSS来！
</code></pre>
<h2>有序列表 ol （了解）</h2>
<p><img src="media/gold.png" /></p>
<p>有序列表即为有排列顺序的列表，其各个列表项按照一定的顺序排列定义，有序列表的基本语法格式如下：</p>
<pre><code class='language-html' lang='html'>&lt;ol&gt;
  &lt;li&gt;列表项1&lt;/li&gt;
  &lt;li&gt;列表项2&lt;/li&gt;
  &lt;li&gt;列表项3&lt;/li&gt;
  ......
&lt;/ol&gt;
</code></pre>
<p>  所有特性基本与ul 一致。<br/></p>
<p>  但是实际工作中， 较少用 ol img src=&quot;media/1.jpg&quot; /&gt;</p>
<p>&nbsp;</p>
<h2>自定义列表（理解）</h2>
<p>定义列表常用于对术语或名词进行解释和描述，定义列表的列表项前没有任何项目符号。其基本语法如下：</p>
<pre><code class='language-html' lang='html'>&lt;dl&gt;
  &lt;dt&gt;名词1&lt;/dt&gt;
  &lt;dd&gt;名词1解释1&lt;/dd&gt;
  &lt;dd&gt;名词1解释2&lt;/dd&gt;
  ...
  &lt;dt&gt;名词2&lt;/dt&gt;
  &lt;dd&gt;名词2解释1&lt;/dd&gt;
  &lt;dd&gt;名词2解释2&lt;/dd&gt;
  ...
&lt;/dl&gt;
</code></pre>
<p> <img src="media/2.jpg" /> </p>
<p>&nbsp;</p>
<p>用的还可以：</p>
<p><img src="media/mix.png" /></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h1>表格 table(会使用)</h1>
<p><img src='http://zcr4.ncfstatic.com/attachment/201403/27/10/5333888008f05_thumb_670x0.jpg' alt='img' /></p>
<p>&nbsp;</p>
<p>存在即是合理的。  表格的现在还是较为常用的一种标签，但不是用来布局，常见处理、显示表格式数据。</p>
<p><img src="media/table.png" /></p>
<p>ps:  这些地方用表格，你会觉得生活还是那么美好。。。。忍不住想说  PPAP i hava a pen<br/></p>
<p>&nbsp;</p>
<h2>创建表格</h2>
<p>在HTML网页中，要想创建表格，就需要使用表格相关的标签。创建表格的基本语法格式如下：</p>
<pre><code class='language-html' lang='html'>&lt;table&gt;
  &lt;tr&gt;
    &lt;td&gt;单元格内的文字&lt;/td&gt;
    ...
  &lt;/tr&gt;
  ...
&lt;/table&gt;
</code></pre>
<p>在上面的语法中包含三对HTML标签，分别为 &lt;table&gt;&lt;/table&gt;、&lt;tr&gt;&lt;/tr&gt;、&lt;td&gt;&lt;/td&gt;，他们是创建表格的基本标签，缺一不可，下面对他们进行具体地解释</p>
<p>&nbsp;</p>
<pre><code>1.table用于定义一个表格。

2.tr 用于定义表格中的一行，必须嵌套在 table标签中，在 table中包含几对 tr，就有几行表格。

3.td /td：用于定义表格中的单元格，必须嵌套在&lt;tr&gt;&lt;/tr&gt;标签中，一对 &lt;tr&gt; &lt;/tr&gt;中包含几对&lt;td&gt;&lt;/td&gt;，就表示该行中有多少列（或多少个单元格）。
</code></pre>
<p>注意：</p>
<pre><code>1. &lt;tr&gt;&lt;/tr&gt;中只能嵌套&lt;td&gt;&lt;/td&gt;
</code></pre>
<pre><code>2. &lt;td&gt;&lt;/td&gt;标签，他就像一个容器，可以容纳所有的元素
</code></pre>
<p>&nbsp;</p>
<h2>表格属性</h2>
<p><img src="media/tt.png" /></p>
<p>三参为0    border  cellpadding  cellspacing  为  0</p>
<h2>表头标签</h2>
<p>表头单元格一般位于表格的第一行或第一列，其文本加粗居中，如下图所示，即为设置了表头的表格。设置表头非常简单，只需用表头标签&lt;th&gt;&lt;/th&gt;替代相应的单元格标签&lt;td&gt;&lt;/td&gt;即可。 </p>
<p> <img src="media/th.png" /></p>
<h2>表格结构（了解）</h2>
<pre><code>在使用表格进行布局时，可以将表格划分为头部、主体和页脚（页脚因为有兼容性问题，我们不在赘述），具体 如下所示：

&lt;thead&gt;&lt;/thead&gt;：用于定义表格的头部。

必须位于&lt;table&gt;&lt;/table&gt; 标签中，一般包含网页的logo和导航等头部信息。


&lt;tbody&gt;&lt;/tbody&gt;：用于定义表格的主体。

位于&lt;table&gt;&lt;/table&gt;标签中，一般包含网页中除头部和底部之外的其他内容。
</code></pre>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><img src="media/thead.png" /></p>
<h2>表格标题</h2>
<p><strong>表格的标题： caption</strong></p>
<p><strong>定义和用法</strong></p>
<p>caption 元素定义表格标题。</p>
<pre><code class='language-html' lang='html'>&lt;table&gt;
   &lt;caption&gt;我是表格标题&lt;/caption&gt;
&lt;/table&gt;
</code></pre>
<p>caption 标签必须紧随 table 标签之后。</p>
<p>只存在 表格里面</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>您只能对每个表格定义一个标题。通常这个标题会被居中于表格之上。</p>
<h2>合并单元格(难点)</h2>
<p>跨行合并：rowspan    跨列合并：colspan</p>
<p>合并单元格的思想：</p>
<p>​     将多个内容合并的时候，就会有多余的东西，把它删除。    例如 把 3个 td 合并成一个， 那就多余了2个，需要删除。</p>
<p>​     公式：  删除的个数  =  合并的个数  - 1 <br/></p>
<p>   合并的顺序 先上 后下   先左  后右</p>
<ol start='' >
<li>先确定是跨行还是跨列合并</li>
<li>根据 先上 后下   先左  后右的原则找到目标单元格 </li>
<li>删除单元格   删除的个数  =  合并的个数  - 1<br/></li>

</ol>
<h2>总结表格</h2>
<ol start='' >
<li><p>表格提供了HTML 中定义表格式数据的方法。</p>
</li>
<li><p>表格中由行中的单元格组成。</p>
</li>
<li><p>表格中没有列元素，列的个数取决于行的单元格个数。</p>
</li>
<li><p>表格不要纠结于外观，那是CSS 的作用。</p>
<p>​</p>
<p><strong>表格的学习要求：  能手写表格结构，并且能合并单元格。</strong></p>
</li>

</ol>
<h1>表单标签(掌握)</h1>
<p>现实中的表单，类似我们去银行办理信用卡填写的单子。 如下图</p>
<p><img src="media/car.jpg"  width="500" /></p>
<p>表单目的是为了收集用户信息。</p>
<p>在我们网页中， 我们也需要跟用户进行交互，收集用户资料，此时也需要表单。</p>
<p>在HTML中，一个完整的表单通常由表单控件（也称为表单元素）、提示信息和表单域3个部分构成。</p>
<p><img src="media/bd.png" /></p>
<p>  表单控件：</p>
<p>​       包含了具体的表单功能项，如单行文本输入框、密码输入框、复选框、提交按钮、重置按钮等。</p>
<p>  提示信息：</p>
<p>​        一个表单中通常还需要包含一些说明性的文字，提示用户进行填写和操作。</p>
<p>  表单域：<br/></p>
<p>​      他相当于一个容器，用来容纳所有的表单控件和提示信息，可以通过他定义处理表单数据所用程序的url地址，以及数据提交到服务器的方法。如果不定义表单域，表单中的数据就无法传送到后台服务器。</p>
<h2>input 控件(重点)</h2>
<p>input 输入的意思 </p>
<p>在上面的语法中，&lt;input /&gt;标签为单标签，type属性为其最基本的属性  类型 ，其取值有多种，用于指定不同的控件类型。除了type属性之外，&lt;input /&gt;标签还可以定义很多其他的属性，其常用属性如下表所示。</p>
<p>type  说明了属于那种表单</p>
<p>&nbsp;</p>
<p>radio  如果是一组，我们必须给他们命名相同的名字 name   这样就可以多个选其中的一个啦</p>
<p>&nbsp;</p>
<p><img src="media/input.png" /></p>
<h2>label标签(理解)</h2>
<p>label 标签为 input 元素定义标注（标签）。</p>
<p>table<br/></p>
<p>作用：  用于绑定一个表单元素, 当点击label标签的时候, 被绑定的表单元素就会获得输入焦点</p>
<p>如何绑定元素呢？</p>
<p>for 属性规定 label 与哪个表单元素绑定。</p>
<pre><code class='language-html' lang='html'>&lt;label for=&quot;male&quot;&gt;Male&lt;/label&gt;
&lt;input type=&quot;radio&quot; name=&quot;sex&quot; id=&quot;male&quot; value=&quot;male&quot;&gt;
</code></pre>
<h2>textarea控件(文本域)</h2>
<p>text  文本框  只能写一行文本呢</p>
<p>textarea 文本域</p>
<p>如果需要输入大量的信息，就需要用到&lt;textarea&gt;&lt;/textarea&gt;标签。通过textarea控件可以轻松地创建多行文本输入框，其基本语法格式如下：</p>
<pre><code class='language-html' lang='html'>&lt;textarea cols=&quot;每行中的字符数&quot; rows=&quot;显示的行数&quot;&gt;
  文本内容
&lt;/textarea&gt;
</code></pre>
<p><img src="media/textarea.png" /></p>
<h2>下拉菜单</h2>
<p>使用select控件定义下拉菜单的基本语法格式如下     select 选择</p>
<pre><code class='language-html' lang='html'>&lt;select&gt;
  &lt;option&gt;选项1&lt;/option&gt;
  &lt;option&gt;选项2&lt;/option&gt;
  &lt;option&gt;选项3&lt;/option&gt;
  ...
&lt;/select&gt;
</code></pre>
<p>注意：</p>
<ol start='' >
<li>&lt;select&gt;</select&gt;中至少应包含一对&lt;option>&lt;/option&gt;。</li>
<li>在option 中定义selected =&quot; selected &quot;时，当前项即为默认选中项。</li>

</ol>
<h2>表单域</h2>
<p>在HTML中，form标签被用于定义表单域，即创建一个表单，以实现用户信息的收集和传递，form中的所有内容都会被提交给服务器。创建表单的基本语法格式如下：</p>
<pre><code class='language-html' lang='html'>&lt;form action=&quot;url地址&quot; method=&quot;提交方式&quot; name=&quot;表单名称&quot;&gt;
  各种表单控件
&lt;/form&gt;
</code></pre>
<p>常用属性：</p>
<ol start='' >
<li>Action
在表单收集到信息后，需要将信息传递给服务器进行处理，action属性用于指定接收并处理表单数据的服务器程序的url地址。</li>
<li>method
用于设置表单数据的提交方式，其取值为get或post。</li>
<li>name
用于指定表单的名称，以区分同一个页面中的多个表单。</li>

</ol>
<p>注意：  每个表单都应该有自己表单域。</p>
<h1>查文档</h1>
<p>经常查阅文档是一个非常好的学习习惯。</p>
<p>W3C :  <a href='http://www.w3school.com.cn/' target='_blank' >http://www.w3school.com.cn/</a></p>
<p>MDN: <a href='https://developer.mozilla.org/zh-CN/' target='_blank' >https://developer.mozilla.org/zh-CN/</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>