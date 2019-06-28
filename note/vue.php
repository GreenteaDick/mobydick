<!doctype html>
<html>
<head>
<meta charset='UTF-8'><meta name='viewport' content='width=device-width initial-scale=1'>
<title>day1.md</title></head>
<body><h1>Vue.js</h1>
<h3>什么是Vue.js</h3>
<ul>
<li>Vue.js 是目前最火的一个前端框架，React是最流行的一个前端框架（React除了开发网站，还可以开发手机App， Vue语法也是可以用于进行手机App开发的，需要借助于Weex）</li>
<li>Vue.js 是前端的<strong>主流框架之一</strong>，和Angular.js、React.js 一起，并成为前端三大主流框架！</li>
<li>Vue.js 是一套构建用户界面的框架，<strong>只关注视图层</strong>，它不仅易于上手，还便于与第三方库或既有项目整合。（Vue有配套的第三方类库，可以整合起来做大型项目的开发）</li>
<li>前端的主要工作？主要负责MVC中的V这一层；主要工作就是和界面打交道，来制作前端页面效果；</li>

</ul>
<p>&nbsp;</p>
<h2>为什么要学习流行框架</h2>
<ul>
<li>企业为了提高开发效率：在企业中，时间就是效率，效率就是金钱；</li>

</ul>
<ul>
<li>企业中，使用框架，能够提高开发的效率；</li>

</ul>
<ul>
<li>提高开发效率的发展历程：原生JS -&gt; Jquery之类的类库 -&gt; 前端模板引擎 -&gt; Angular.js / Vue.js（能够帮助我们减少不必要的DOM操作；提高渲染效率；双向数据绑定的概念【通过框架提供的指令，我们前端程序员只需要关心数据的业务逻辑，不再关心DOM是如何渲染的了】）</li>
<li>在Vue中，一个核心的概念，就是让用户不再操作DOM元素，解放了用户的双手，让程序员可以更多的时间去关注业务逻辑；</li>

</ul>
<ul>
<li>增强自己就业时候的竞争力</li>

</ul>
<ul>
<li>人无我有，人有我优</li>
<li>你平时不忙的时候，都在干嘛？</li>

</ul>
<h2>框架和库的区别</h2>
<p>&nbsp;</p>
<ul>
<li>框架：是一套完整的解决方案；对项目的侵入性较大，项目如果需要更换框架，则需要重新架构整个项目。</li>

</ul>
<ul>
<li>node 中的 express；</li>

</ul>
<ul>
<li>库（插件）：提供某一个小功能，对项目的侵入性较小，如果某个库无法完成某些需求，可以很容易切换到其它库实现需求。</li>

</ul>
<ul>
<li><ol start='' >
<li>从Jquery 切换到 Zepto</li>

</ol>
</li>
<li><ol start='2' >
<li>从 EJS 切换到 art-template</li>

</ol>
</li>

</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2>Node（后端）中的 MVC 与 前端中的 MVVM 之间的区别</h2>
<ul>
<li>MVC 是后端的分层开发概念；</li>
<li>MVVM是前端视图层的概念，主要关注于 视图层分离，也就是说：MVVM把前端的视图层，分为了 三部分 Model, View , VM ViewModel</li>
<li>为什么有了MVC还要有MVVM</li>

</ul>
<h2>Vue.js 基本代码 和 MVVM 之间的对应关系</h2>
<h2>Vue之 - <code>基本的代码结构</code>和<code>插值表达式</code>、<code>v-cloak</code></h2>
<h2>Vue指令之<code>v-text</code>和<code>v-html</code></h2>
<h2>Vue指令之<code>v-bind</code>的三种用法</h2>
<ol start='' >
<li>直接使用指令<code>v-bind</code></li>
<li>使用简化指令<code>:</code></li>
<li>在绑定的时候，拼接绑定内容：<code>:title=&quot;btnTitle + &#39;, 这是追加的内容&#39;&quot;</code></li>

</ol>
<h2>Vue指令之<code>v-on</code>和<code>跑马灯效果</code></h2>
<p>&nbsp;</p>
<h3>跑马灯效果</h3>
<ol start='' >
<li>HTML结构：</li>

</ol>
<pre><code>
&lt;div id=&quot;app&quot;&gt;

    &lt;p&gt;{{info}}&lt;/p&gt;

    &lt;input type=&quot;button&quot; value=&quot;开启&quot; v-on:click=&quot;go&quot;&gt;

    &lt;input type=&quot;button&quot; value=&quot;停止&quot; v-on:click=&quot;stop&quot;&gt;

  &lt;/div&gt;

</code></pre>
<ol start='2' >
<li>Vue实例：</li>

</ol>
<pre><code>
	// 创建 Vue 实例，得到 ViewModel

    var vm = new Vue({

      el: &#39;#app&#39;,

      data: {

        info: &#39;猥琐发育，别浪~！&#39;,

        intervalId: null

      },

      methods: {

        go() {

          // 如果当前有定时器在运行，则直接return

          if (this.intervalId != null) {

            return;

          }

          // 开始定时器

          this.intervalId = setInterval(() =&gt; {

            this.info = this.info.substring(1) + this.info.substring(0, 1);

          }, 500);

        },

        stop() {

          clearInterval(this.intervalId);

        }

      }

    });

</code></pre>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2>Vue指令之<code>v-on的缩写</code>和<code>事件修饰符</code></h2>
<p>&nbsp;</p>
<h3>事件修饰符：</h3>
<ul>
<li>.stop       阻止冒泡</li>
<li>.prevent    阻止默认事件</li>
<li>.capture    添加事件侦听器时使用事件捕获模式</li>
<li>.self       只当事件在该元素本身（比如不是子元素）触发时触发回调</li>
<li>.once       事件只触发一次</li>

</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2>Vue指令之<code>v-model</code>和<code>双向数据绑定</code></h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2>简易计算器案例</h2>
<ol start='' >
<li>HTML 代码结构</li>

</ol>
<pre><code>
  &lt;div id=&quot;app&quot;&gt;

    &lt;input type=&quot;text&quot; v-model=&quot;n1&quot;&gt;

    &lt;select v-model=&quot;opt&quot;&gt;

      &lt;option value=&quot;0&quot;&gt;+&lt;/option&gt;

      &lt;option value=&quot;1&quot;&gt;-&lt;/option&gt;

      &lt;option value=&quot;2&quot;&gt;*&lt;/option&gt;

      &lt;option value=&quot;3&quot;&gt;÷&lt;/option&gt;

    &lt;/select&gt;

    &lt;input type=&quot;text&quot; v-model=&quot;n2&quot;&gt;

    &lt;input type=&quot;button&quot; value=&quot;=&quot; v-on:click=&quot;getResult&quot;&gt;

    &lt;input type=&quot;text&quot; v-model=&quot;result&quot;&gt;

  &lt;/div&gt;

</code></pre>
<ol start='2' >
<li>Vue实例代码：</li>

</ol>
<pre><code>
	// 创建 Vue 实例，得到 ViewModel

    var vm = new Vue({

      el: &#39;#app&#39;,

      data: {

        n1: 0,

        n2: 0,

        result: 0,

        opt: &#39;0&#39;

      },

      methods: {

        getResult() {

          switch (this.opt) {

            case &#39;0&#39;:

              this.result = parseInt(this.n1) + parseInt(this.n2);

              break;

            case &#39;1&#39;:

              this.result = parseInt(this.n1) - parseInt(this.n2);

              break;

            case &#39;2&#39;:

              this.result = parseInt(this.n1) * parseInt(this.n2);

              break;

            case &#39;3&#39;:

              this.result = parseInt(this.n1) / parseInt(this.n2);

              break;

          }

        }

      }

    });

</code></pre>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2>在Vue中使用样式</h2>
<p>&nbsp;</p>
<h3>使用class样式</h3>
<ol start='' >
<li>数组</li>

</ol>
<pre><code>&lt;h1 :class=&quot;[&#39;red&#39;, &#39;thin&#39;]&quot;&gt;这是一个邪恶的H1&lt;/h1&gt;
</code></pre>
<ol start='2' >
<li>数组中使用三元表达式</li>

</ol>
<pre><code>&lt;h1 :class=&quot;[&#39;red&#39;, &#39;thin&#39;, isactive?&#39;active&#39;:&#39;&#39;]&quot;&gt;这是一个邪恶的H1&lt;/h1&gt;
</code></pre>
<ol start='3' >
<li>数组中嵌套对象</li>

</ol>
<pre><code>&lt;h1 :class=&quot;[&#39;red&#39;, &#39;thin&#39;, {&#39;active&#39;: isactive}]&quot;&gt;这是一个邪恶的H1&lt;/h1&gt;
</code></pre>
<ol start='4' >
<li>直接使用对象</li>

</ol>
<pre><code>&lt;h1 :class=&quot;{red:true, italic:true, active:true, thin:true}&quot;&gt;这是一个邪恶的H1&lt;/h1&gt;
</code></pre>
<p>&nbsp;</p>
<h3>使用内联样式</h3>
<ol start='' >
<li>直接在元素上通过 <code>:style</code> 的形式，书写样式对象</li>

</ol>
<pre><code>&lt;h1 :style=&quot;{color: &#39;red&#39;, &#39;font-size&#39;: &#39;40px&#39;}&quot;&gt;这是一个善良的H1&lt;/h1&gt;
</code></pre>
<ol start='2' >
<li>将样式对象，定义到 <code>data</code> 中，并直接引用到 <code>:style</code> 中</li>

</ol>
<ul>
<li>在data上定义样式：</li>

</ul>
<pre><code>data: {
        h1StyleObj: { color: &#39;red&#39;, &#39;font-size&#39;: &#39;40px&#39;, &#39;font-weight&#39;: &#39;200&#39; }
}
</code></pre>
<ul>
<li>在元素中，通过属性绑定的形式，将样式对象应用到元素中：</li>

</ul>
<pre><code>&lt;h1 :style=&quot;h1StyleObj&quot;&gt;这是一个善良的H1&lt;/h1&gt;
</code></pre>
<ol start='3' >
<li>在 <code>:style</code> 中通过数组，引用多个 <code>data</code> 上的样式对象</li>

</ol>
<ul>
<li>在data上定义样式：</li>

</ul>
<pre><code>data: {
        h1StyleObj: { color: &#39;red&#39;, &#39;font-size&#39;: &#39;40px&#39;, &#39;font-weight&#39;: &#39;200&#39; },
        h1StyleObj2: { fontStyle: &#39;italic&#39; }
}
</code></pre>
<ul>
<li>在元素中，通过属性绑定的形式，将样式对象应用到元素中：</li>

</ul>
<pre><code>&lt;h1 :style=&quot;[h1StyleObj, h1StyleObj2]&quot;&gt;这是一个善良的H1&lt;/h1&gt;
</code></pre>
<p>&nbsp;</p>
<h2>Vue指令之<code>v-for</code>和<code>key</code>属性</h2>
<ol start='' >
<li>迭代数组</li>

</ol>
<pre><code>&lt;ul&gt;
  &lt;li v-for=&quot;(item, i) in list&quot;&gt;索引：{{i}} --- 姓名：{{item.name}} --- 年龄：{{item.age}}&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
<ol start='2' >
<li>迭代对象中的属性</li>

</ol>
<pre><code>
	&lt;!-- 循环遍历对象身上的属性 --&gt;

    &lt;div v-for=&quot;(val, key, i) in userInfo&quot;&gt;{{val}} --- {{key}} --- {{i}}&lt;/div&gt;

</code></pre>
<ol start='3' >
<li>迭代数字</li>

</ol>
<pre><code>
&lt;p v-for=&quot;i in 10&quot;&gt;这是第 {{i}} 个P标签&lt;/p&gt;

</code></pre>
<p>&nbsp;</p>
<blockquote><p>2.2.0+ 的版本里，<strong>当在组件中使用</strong> v-for 时，key 现在是必须的。</p>
</blockquote>
<p>&nbsp;</p>
<p>当 Vue.js 用 v-for 正在更新已渲染过的元素列表时，它默认用 “<strong>就地复用</strong>” 策略。如果数据项的顺序被改变，Vue将<strong>不是移动 DOM 元素来匹配数据项的顺序</strong>， 而是<strong>简单复用此处每个元素</strong>，并且确保它在特定索引下显示已被渲染过的每个元素。</p>
<p>&nbsp;</p>
<p>为了给 Vue 一个提示，<strong>以便它能跟踪每个节点的身份，从而重用和重新排序现有元素</strong>，你需要为每项提供一个唯一 key 属性。</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2>Vue指令之<code>v-if</code>和<code>v-show</code></h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote><p>一般来说，v-if 有更高的切换消耗而 v-show 有更高的初始渲染消耗。因此，如果需要频繁切换 v-show 较好，如果在运行时条件不大可能改变 v-if 较好。</p>
</blockquote>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2>品牌管理案例</h2>
<p>&nbsp;</p>
<h3>添加新品牌</h3>
<p>&nbsp;</p>
<h3>删除品牌</h3>
<p>&nbsp;</p>
<h3>根据条件筛选品牌</h3>
<ol start='' >
<li>1.x 版本中的filterBy指令，在2.x中已经被废除：</li>

</ol>
<p><a href='https://v1-cn.vuejs.org/api/#filterBy'>filterBy - 指令</a></p>
<pre><code>
&lt;tr v-for=&quot;item in list | filterBy searchName in &#39;name&#39;&quot;&gt;

  &lt;td&gt;{{item.id}}&lt;/td&gt;

  &lt;td&gt;{{item.name}}&lt;/td&gt;

  &lt;td&gt;{{item.ctime}}&lt;/td&gt;

  &lt;td&gt;

    &lt;a href=&quot;#&quot; @click.prevent=&quot;del(item.id)&quot;&gt;删除&lt;/a&gt;

  &lt;/td&gt;

&lt;/tr&gt;

</code></pre>
<ol start='2' >
<li>在2.x版本中<a href='https://cn.vuejs.org/v2/guide/list.html#%E6%98%BE%E7%A4%BA%E8%BF%87%E6%BB%A4-%E6%8E%92%E5%BA%8F%E7%BB%93%E6%9E%9C'>手动实现筛选的方式</a>：</li>

</ol>
<ul>
<li>筛选框绑定到 VM 实例中的 <code>searchName</code> 属性：</li>

</ul>
<pre><code>
&lt;hr&gt; 输入筛选名称：

&lt;input type=&quot;text&quot; v-model=&quot;searchName&quot;&gt;

</code></pre>
<ul>
<li>在使用 <code>v-for</code> 指令循环每一行数据的时候，不再直接 <code>item in list</code>，而是 <code>in</code> 一个 过滤的methods 方法，同时，把过滤条件<code>searchName</code>传递进去：</li>

</ul>
<pre><code>
&lt;tbody&gt;

      &lt;tr v-for=&quot;item in search(searchName)&quot;&gt;

        &lt;td&gt;{{item.id}}&lt;/td&gt;

        &lt;td&gt;{{item.name}}&lt;/td&gt;

        &lt;td&gt;{{item.ctime}}&lt;/td&gt;

        &lt;td&gt;

          &lt;a href=&quot;#&quot; @click.prevent=&quot;del(item.id)&quot;&gt;删除&lt;/a&gt;

        &lt;/td&gt;

      &lt;/tr&gt;

    &lt;/tbody&gt;

</code></pre>
<ul>
<li><code>search</code> 过滤方法中，使用 数组的 <code>filter</code> 方法进行过滤：</li>

</ul>
<pre><code>
search(name) {

  return this.list.filter(x =&gt; {

    return x.name.indexOf(name) != -1;

  });

}

</code></pre>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2>Vue调试工具<code>vue-devtools</code>的安装步骤和使用</h2>
<p><a href='https://chrome.google.com/webstore/detail/vuejs-devtools/nhdogjmejiglipccpnnnanhbledajbpd?hl=zh-CN'>Vue.js devtools - 翻墙安装方式 - 推荐</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2>过滤器</h2>
<p>概念：Vue.js 允许你自定义过滤器，<strong>可被用作一些常见的文本格式化</strong>。过滤器可以用在两个地方：<strong>mustache 插值和 v-bind 表达式</strong>。过滤器应该被添加在 JavaScript 表达式的尾部，由“管道”符指示；</p>
<h3>私有过滤器</h3>
<ol start='' >
<li>HTML元素：</li>

</ol>
<pre><code>
&lt;td&gt;{{item.ctime | dataFormat(&#39;yyyy-mm-dd&#39;)}}&lt;/td&gt;

</code></pre>
<ol start='2' >
<li>私有 <code>filters</code> 定义方式：</li>

</ol>
<pre><code>
filters: { // 私有局部过滤器，只能在 当前 VM 对象所控制的 View 区域进行使用

    dataFormat(input, pattern = &quot;&quot;) { // 在参数列表中 通过 pattern=&quot;&quot; 来指定形参默认值，防止报错

      var dt = new Date(input);

      // 获取年月日

      var y = dt.getFullYear();

      var m = (dt.getMonth() + 1).toString().padStart(2, &#39;0&#39;);

      var d = dt.getDate().toString().padStart(2, &#39;0&#39;);



      // 如果 传递进来的字符串类型，转为小写之后，等于 yyyy-mm-dd，那么就返回 年-月-日

      // 否则，就返回  年-月-日 时：分：秒

      if (pattern.toLowerCase() === &#39;yyyy-mm-dd&#39;) {

        return `${y}-${m}-${d}`;

      } else {

        // 获取时分秒

        var hh = dt.getHours().toString().padStart(2, &#39;0&#39;);

        var mm = dt.getMinutes().toString().padStart(2, &#39;0&#39;);

        var ss = dt.getSeconds().toString().padStart(2, &#39;0&#39;);



        return `${y}-${m}-${d} ${hh}:${mm}:${ss}`;

      }

    }

  }

</code></pre>
<p>&nbsp;</p>
<blockquote><p>使用ES6中的字符串新方法 String.prototype.padStart(maxLength, fillString=&#39;&#39;) 或 String.prototype.padEnd(maxLength, fillString=&#39;&#39;)来填充字符串；</p>
</blockquote>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3>全局过滤器</h3>
<pre><code>
// 定义一个全局过滤器

Vue.filter(&#39;dataFormat&#39;, function (input, pattern = &#39;&#39;) {

  var dt = new Date(input);

  // 获取年月日

  var y = dt.getFullYear();

  var m = (dt.getMonth() + 1).toString().padStart(2, &#39;0&#39;);

  var d = dt.getDate().toString().padStart(2, &#39;0&#39;);



  // 如果 传递进来的字符串类型，转为小写之后，等于 yyyy-mm-dd，那么就返回 年-月-日

  // 否则，就返回  年-月-日 时：分：秒

  if (pattern.toLowerCase() === &#39;yyyy-mm-dd&#39;) {

    return `${y}-${m}-${d}`;

  } else {

    // 获取时分秒

    var hh = dt.getHours().toString().padStart(2, &#39;0&#39;);

    var mm = dt.getMinutes().toString().padStart(2, &#39;0&#39;);

    var ss = dt.getSeconds().toString().padStart(2, &#39;0&#39;);



    return `${y}-${m}-${d} ${hh}:${mm}:${ss}`;

  }

});

</code></pre>
<p>&nbsp;</p>
<blockquote><p>注意：当有局部和全局两个名称相同的过滤器时候，会以就近原则进行调用，即：局部过滤器优先于全局过滤器被调用！</p>
</blockquote>
<p>&nbsp;</p>
<h2>键盘修饰符以及自定义键盘修饰符</h2>
<h3>1.x中自定义键盘修饰符【了解即可】</h3>
<pre><code>
Vue.directive(&#39;on&#39;).keyCodes.f2 = 113;

</code></pre>
<h3><a href='https://cn.vuejs.org/v2/guide/events.html#%E9%94%AE%E5%80%BC%E4%BF%AE%E9%A5%B0%E7%AC%A6'>2.x中自定义键盘修饰符</a></h3>
<ol start='' >
<li>通过<code>Vue.config.keyCodes.名称 = 按键值</code>来自定义案件修饰符的别名：</li>

</ol>
<pre><code>
Vue.config.keyCodes.f2 = 113;

</code></pre>
<ol start='2' >
<li>使用自定义的按键修饰符：</li>

</ol>
<pre><code>
&lt;input type=&quot;text&quot; v-model=&quot;name&quot; @keyup.f2=&quot;add&quot;&gt;

</code></pre>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2><a href='https://cn.vuejs.org/v2/guide/custom-directive.html'>自定义指令</a></h2>
<ol start='' >
<li>自定义全局和局部的 自定义指令：</li>

</ol>
<pre><code>
    // 自定义全局指令 v-focus，为绑定的元素自动获取焦点：

    Vue.directive(&#39;focus&#39;, {

      inserted: function (el) { // inserted 表示被绑定元素插入父节点时调用

        el.focus();

      }

    });



    // 自定义局部指令 v-color 和 v-font-weight，为绑定的元素设置指定的字体颜色 和 字体粗细：

      directives: {

        color: { // 为元素设置指定的字体颜色

          bind(el, binding) {

            el.style.color = binding.value;

          }

        },

        &#39;font-weight&#39;: function (el, binding2) { // 自定义指令的简写形式，等同于定义了 bind 和 update 两个钩子函数

          el.style.fontWeight = binding2.value;

        }

      }

</code></pre>
<ol start='2' >
<li>自定义指令的使用方式：</li>

</ol>
<pre><code>
&lt;input type=&quot;text&quot; v-model=&quot;searchName&quot; v-focus v-color=&quot;&#39;red&#39;&quot; v-font-weight=&quot;900&quot;&gt;

</code></pre>
<p>&nbsp;</p>
<h2>Vue 1.x 中 自定义元素指令【已废弃,了解即可】</h2>
<pre><code>Vue.elementDirective(&#39;red-color&#39;, {
  bind: function () {
    this.el.style.color = &#39;red&#39;;
  }
});
</code></pre>
<p>使用方式：</p>
<pre><code>&lt;red-color&gt;1232&lt;/red-color&gt;
</code></pre>
<h2>相关文章</h2>
<ol start='' >
<li><a href='https://v1-cn.vuejs.org/'>vue.js 1.x 文档</a></li>
<li><a href='https://cn.vuejs.org/'>vue.js 2.x 文档</a></li>
<li><a href='http://www.css88.com/archives/7715'>String.prototype.padStart(maxLength, fillString)</a></li>
<li><a href='http://www.cnblogs.com/wuhua1/p/6686237.html'>js 里面的键盘事件对应的键码</a></li>
<li><a href='http://www.cnblogs.com/kidney/p/6052935.html'>Vue.js双向绑定的实现原理</a></li>

</ol>
</body>
</html>