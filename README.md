# PP03_Bulletin-board
<h4>게시<br/>
본 게시판은 그룹 프로젝트 "Weventory"(https://github.com/wcodingforever/weventory)에 참여할 당시,<br/>
도움이 필요한 User들과 소통을 위한 "Help" 페이지로 만들어졌습니다. 
</h4>
<br/>
<br/>
<div align="center">
    <img src="photos/bulletin-board.png" width="800px"/> 
</div>
<br/>
<br/>
<h3><i>게시판은 하나의 web page로 만들어졌으며, 역할에 따라 3 parts로 나뉩니다.<br/><br/>
A. Bulletin board<br/>
B. Write article<br/>
C. Read article<br/></h3></i>
<br/>
페이지가 어느 역할을 유저에게 수행하고 있느냐에 따라, 그 역할을 담당하는 part는 toggle on되어 보여지고,<br/>
나머지 parts는 toggle off되어 보여지지 않게 되는 방식으로 작동합니다. 
<br/><br/>

<h2>Part A. Bulletin board</h2>

<h3>1. Sticky articles</h3>
운영자들은 전체공고글등을 게시할 때, 게시판 맨 위에 정렬되는 sticky articles을 작성하여 수 있습니다. 
Sticky articles은 분홍색 바탕색으로 일반 글들과 구분되어 보여집니다. 
<br/><br/>

<h3>2. 답글(Reply)의 수 표시</h3>
각 글의 제목 옆에 해당 글에 얼마나 많은 답글이 달렸는 지가 표시됩니다.
<br/><br/>

<h3>3. 조회수</h3>
'hits' column의 값들은 해당 글의 조회수를 나타냅니다. 
<br/><br/>

<h3>4. Ask for help</h3>
유저는 Ask for help 버튼을 누름으로써, 요청글을 쓸 수 있는 Read article part로 이동하게 됩니다. 
<br/><br/><br/><br/><br/>


<h2>Part B. Wrtie article</h2>
<h3>1. Sticky mode</h3>
유저가 관리자라면, form에 "sticky mode" 옵션이 추가되어 나타나지게 됩니다.
<br/><br/>
<h3>2. 답글 제목 자동 생성하기</h3>
유저가 답글을 쓰기위해 Write article part로 이동된 거라면, 글의 제목은 <b>"Re: (The article title to reply)"</b><br/>
으로 자동 생성되어집니다.
<br/><br/>

<h3>3. 비밀번호 설정</h3>
모든 글들은 해당 글에 설정된 비밀번호를 입력하지 않으면 볼 수 없는 접근이 제한된 private articles과<br/>
그렇지 않고 모두에게 공개되는 public articles들로 분류될 수 있습니다. 
<br/><br/>

<h3>4. Tags</h3>
<br/>
<div align="center">
    <img src="photos/write-article-tags.png" width="650px"/> 
</div>
<br/>

<h4>조건 사항</h4>
- 최대 10 tags 허용<br/>
- 같은 내용의 tag 불가<br/>
<br/>
어느 조건이라도 충족이 안될 경우, 해당 error를 알리는 alert 창이 띄워집니다. 
<br/><br/>

<h3>5. 파일 첨부</h3>
<br/>
<div align="center">
    <img src="photos/write-article-file-attatchment.png" width="650px"/> 
</div>
<br/>

<h4>조건 사항</h4>
- 최대 3 파일 허용<br/>
- 같은 파일 첨부 불가<br/>
<br/>
어느 조건이라도 충족이 안될 경우, 해당 error를 알리는 alert 창이 띄워집니다.
<br/><br/><br/><br/><br/>


<h2>Part C. Read article</h2>
<h3>1. Private article</h3>
ㅖrivate artilce들의 내용은, 유저가 정확한 패스워드를 입력했을 시에만 보여지게 됩니다.
<br/><br/>
<h3>2. Reply articles</h3>
<br/>
<div align="center">
    <img src="photos/private-child-article.png" width="650px"/> 
</div><br/>
유저들을 하나의 글에 여러개의 답글(Reply)들을 달 수 있습니다.<br/>
<br/>
<h4>Private reply article</h4>
답글들 또한 비밀번호가 설정된다면, private article이 될 수 있습니다.
<br/><br/><br/><br/><br/>

P.S. 본 게시판은 연습을 목적으로 만든 작품이 보니, 여러가지 부족한 점이 많습니다.<br/>
private 데이터를 전송또는 받을 시 hash code를 사용지 않아 보안상으로 흠이 있고,<br/>
JS로 HTML을 생성할때, 연습을 위해 여러 methods를 써봤는데, 효율적인 방법은 아니었습니다.<br/>
하지만 이런 문제점들을 개선할 예정입니다. 
<br/><br/><br/>

----------------------------------------------------------------------------------------------------------------------------------------
<br/><br/>
<h4>This is a bulletin board.<br/>
I made this as a part of the group project, "Weventory"(https://github.com/wcodingforever/weventory).<br/>
It was "help" page of "Weventory" app which was to receive and reply to customers' help requests. 
</h4>
<br/>
<br/>
<div align="center">
    <img src="photos/bulletin-board.png" width="800px"/> 
</div>
<br/>
<br/>
<h3><i>The bulletin board was made on one single page. The page is divided into 3 parts according to their roles.<br/><br/>
A. Bulletin board<br/>
B. Write article<br/>
C. Read article<br/></h3></i>
<br/><br/><br/>

<h2>Part A. Bulletin board</h2>

<h3>1. Sticky articles</h3>
Admins can write sicky articles which are arranged on the top of the bulletin board.<br/>
Sticky articles are distinguished with "pink" background color.
<br/><br/>

<h3>2. Showing the number of reply articles</h3>
Next to the title, how many reply articles each article has is marked.
<br/><br/>

<h3>3. Hits</h3>
The 'hits' column shows how many times users have clicked the article.
<br/><br/>

<h3>4. Ask for help</h3>
The button leads to "Write article" part where users can send their articles. 
<br/><br/><br/><br/><br/>


<h2>Part B. Wrtie article</h2>
<h3>1. Sticky mode</h3>
If the user is an admin member, an additional option, sticky mode'll be added.
<br/><br/>
<h3>2. Automatically creating the title for a reply article</h3>
If a user tries to write a reply article, the title for the reply article'll be created automatically<br/>
in this form, <b>"Re: (The article title to reply)"</b>.
<br/><br/>

<h3>3. Password</h3>
If a user wants to make the article private, <br/>
By setting the password, the access to the article can be resticted.
<br/><br/>

<h3>4. Tags</h3>
<br/>
<div align="center">
    <img src="photos/write-article-tags.png" width="650px"/> 
</div>
<br/>

<h4>Conditions</h4>
- Max. 10 tags<br/>
- The same tag can't be added.<br/>
<br/>
If any of the conditions was not met, an alert message'll report about the error. 
<br/><br/>

<h3>5. File attatchment</h3>
<br/>
<div align="center">
    <img src="photos/write-article-file-attatchment.png" width="650px"/> 
</div>
<br/>

<h4>Conditions</h4>
- Max. 3 files<br/>
- The same file can't be added.<br/>
<br/>
If any of the conditions was not met, an alert message'll report about the error. 
<br/><br/><br/><br/><br/>


<h2>Part C. Read article</h2>
<h3>1. Private article</h3>
If a user enters the correct password for the article, the content of the article'll be shown. 
<br/><br/>
<h3>2. Reply articles</h3>
<br/>
<div align="center">
    <img src="photos/private-child-article.png" width="650px"/> 
</div><br/>
A article can have multiple reply articles. <br/>
<br/>
<h4>Private reply article</h4>
If an user set the password for a reply article, the reply article also can be a private article.
<br/><br/><br/><br/><br/>

P.S. Since I made this as a practice, it has many incomplete parts. <br/>
For example, not using hash codes when sending passwords, inefficient ways to create HTML elements etc.<br/>
I am planning to improve those parts soon.


