<style>
:root{--bg:#f4f6fb;--card:#fff;--ink:#162033;--muted:#667085;--line:#e3e8f0;--pri:<?php echo e($color ?? '#3157c8'); ?>;--side:<?php echo e($sidebar ?? '#141d3b'); ?>;--pri2:#eef2ff;--ok:#12805c;--oks:#e6f6ee;--no:#c0262d;--nos:#fdecec;--warn:#9a5b00;--warns:#fff4dc;--r:12px}
*{box-sizing:border-box}html,body{margin:0}
body{background:var(--bg);color:var(--ink);font-family:Vazirmatn,Tahoma,sans-serif;font-size:14px;line-height:1.85}
a{color:var(--pri)}button,input,select,textarea{font:inherit;color:inherit}
.ic{width:18px;height:18px;flex:none}
.app{display:grid;grid-template-columns:260px 1fr;min-height:100vh}
aside.side{background:var(--side);color:#cfd6ee;padding:16px 12px;position:sticky;top:0;height:100vh;overflow:auto}
.brand{display:flex;gap:10px;align-items:center;color:#fff;font-weight:700;padding:2px 8px 14px;border-bottom:1px solid rgba(255,255,255,.08);margin-bottom:8px}
.brand .logo{width:36px;height:36px;border-radius:10px;background:var(--pri);display:grid;place-items:center;flex:none}
.brand small{display:block;font-weight:400;color:#93a0c8;font-size:11.5px}
.mi{display:flex;gap:9px;align-items:center;padding:7px 10px;border-radius:9px;color:#cfd6ee;text-decoration:none;margin:1px 0}
.mi:hover{background:rgba(255,255,255,.07)}.mi.on{background:var(--pri);color:#fff}
details.mg>summary{display:flex;gap:9px;align-items:center;padding:7px 10px;border-radius:9px;cursor:pointer;color:#e6eaf7;font-weight:600;margin-top:4px;list-style:none}
details.mg>summary::-webkit-details-marker{display:none}
details.mg>summary:hover{background:rgba(255,255,255,.05)}
.sub{margin-right:14px;border-right:1px solid rgba(255,255,255,.1);padding-right:6px}
.main{min-width:0}
.top{display:flex;gap:10px;align-items:center;flex-wrap:wrap;background:var(--card);border-bottom:1px solid var(--line);padding:9px 20px;position:sticky;top:0;z-index:5}
.top .sp{margin-right:auto}
.content{padding:22px;max-width:1300px}
.card{background:var(--card);border:1px solid var(--line);border-radius:var(--r);padding:18px;margin-bottom:16px}
.card h2{font-size:15.5px;margin:0 0 4px}
.muted{color:var(--muted)}.small{font-size:12px}
.desc{color:var(--muted);font-size:12.5px;margin:0 0 12px}
.hd{display:flex;gap:10px;align-items:flex-start;flex-wrap:wrap;margin-bottom:12px}.hd>div:first-child{margin-left:auto}
.grid{display:grid;gap:14px}.g2{grid-template-columns:1fr 1fr}.g4{grid-template-columns:repeat(4,1fr)}.g75{grid-template-columns:7fr 5fr}
.stat{background:var(--card);border:1px solid var(--line);border-radius:var(--r);padding:14px 16px}.stat b{display:block;font-size:20px}.stat span{color:var(--muted);font-size:12.5px}
.btn{border:1px solid var(--line);background:#fff;border-radius:9px;padding:5px 12px;cursor:pointer;display:inline-flex;gap:6px;align-items:center;white-space:nowrap;text-decoration:none;color:var(--ink)}
.btn:hover{background:#fafbfe;border-color:#c5cee0}
.btn.pri{background:var(--pri);border-color:var(--pri);color:#fff}.btn.pri:hover{filter:brightness(.92)}
.btn.dng{color:var(--no)}.btn.sm{padding:2px 8px;font-size:12.5px;border-radius:7px}
.btn:disabled{opacity:.4;cursor:not-allowed}
table{width:100%;border-collapse:collapse}th,td{padding:8px 10px;border-bottom:1px solid var(--line);text-align:right;vertical-align:middle}
th{font-size:12.5px;color:var(--muted);font-weight:600;background:#fafbfd}
.tw{overflow:auto;border:1px solid var(--line);border-radius:10px}
.b{display:inline-block;font-size:11.5px;border-radius:10px;padding:0 8px;font-weight:600;white-space:nowrap}
.b-ok{background:var(--oks);color:var(--ok)}.b-no{background:var(--nos);color:var(--no)}.b-warn{background:var(--warns);color:var(--warn)}.b-pri{background:var(--pri2);color:#3157c8}.b-mut{background:#f0f2f6;color:var(--muted)}
code{direction:ltr;unicode-bidi:isolate;font-family:Consolas,monospace;font-size:12px;background:#f2f4f8;border-radius:5px;padding:0 5px}
input[type=text],input[type=password],input[type=email],input[type=tel],select,textarea{border:1px solid var(--line);border-radius:8px;padding:6px 10px;background:#fff;min-width:0}
input:focus,select:focus,textarea:focus{outline:2px solid #c7d4fb;border-color:var(--pri)}
label.f{display:block;margin-bottom:10px}label.f>span{display:block;font-size:12.5px;color:var(--muted);margin-bottom:2px}
label.f input,label.f select{width:100%}
.row{display:flex;gap:8px;align-items:center;flex-wrap:wrap}
.alert{padding:9px 13px;border-radius:10px;margin:0 0 12px;font-size:13px}
.alert.no{background:var(--nos);color:var(--no)}.alert.ok{background:var(--oks);color:var(--ok)}.alert.info{background:var(--pri2);color:#3157c8}.alert.warn{background:var(--warns);color:var(--warn)}
.page-hd{display:flex;align-items:center;gap:10px;margin-bottom:14px}.page-hd h1{font-size:20px;margin:0}
.node{display:flex;align-items:center;gap:6px;padding:6px 8px;border:1px solid var(--line);border-radius:9px;margin:4px 0;background:#fff;flex-wrap:wrap}
.node.sel{border-color:var(--pri);box-shadow:0 0 0 2px #dfe6fd}.node.off{opacity:.55}
.kids{margin-right:24px;border-right:2px dashed var(--line);padding-right:8px}
.node .acts{margin-right:auto;display:flex;gap:3px}.node form{display:inline}
.trace li{margin:2px 0}.trace .chosen{color:var(--ok);font-weight:600}.trace .rejected{color:var(--no)}.trace .skipped,.trace .empty{color:#98a1b3}
.mx td.c,.mx th.c{text-align:center}
.pager{display:flex;gap:6px;margin-top:10px}
.hamb{display:none}
@media (max-width:1050px){.g2,.g75{grid-template-columns:1fr}.g4{grid-template-columns:1fr 1fr}}
@media (max-width:860px){.app{grid-template-columns:1fr}aside.side{position:fixed;right:-280px;width:270px;z-index:40;transition:right .2s}
aside.side.open{right:0;box-shadow:-10px 0 30px rgba(0,0,0,.3)}.hamb{display:inline-flex}.content{padding:14px}.top{padding:9px 12px}}
/* auth */
.auth{min-height:100vh;display:grid;place-items:center;padding:24px 16px;background:linear-gradient(135deg,#0f1d3d,#1d3a8a 55%,#0f766e)}
.auth-card{background:#fff;border-radius:18px;width:min(420px,100%);padding:28px 26px;box-shadow:0 30px 60px rgba(0,0,0,.25)}
.auth-card h1{font-size:20px;text-align:center;margin:8px 0 2px}.auth-card .desc{text-align:center}
.auth-card .btn.pri{width:100%;justify-content:center;padding:9px;font-weight:700;border-radius:10px}
.auth-card input{padding:9px 12px!important;border-radius:10px!important;font-size:14.5px}
.tabs{display:grid;grid-template-columns:1fr 1fr;background:#f1f4f9;border-radius:11px;padding:4px;margin:16px 0}
.tabs a{padding:7px;border-radius:8px;text-align:center;font-weight:600;color:var(--muted);text-decoration:none}
.tabs a.on{background:#fff;color:var(--ink);box-shadow:0 1px 4px rgba(0,0,0,.08)}
.otp{letter-spacing:10px;text-align:center;font-size:20px!important;direction:ltr;font-family:Consolas,monospace}
.ctx{display:flex;gap:10px;align-items:center;border:1px solid var(--line);border-radius:12px;padding:10px 12px;margin:8px 0;width:100%;background:#fff;text-align:right;cursor:pointer}
.ctx:hover:not(:disabled){border-color:var(--pri)}.ctx:disabled{opacity:.55;cursor:not-allowed}
</style>
<style>
.role-preview{background:#f7f9fc;border:1px solid var(--line);border-radius:10px;padding:10px 12px;margin:-4px 0 12px}
.perms .b{margin:1px 0}
.owner-box{display:flex;gap:10px;align-items:center;background:var(--pri2);border-radius:10px;padding:10px 12px;margin-bottom:12px;color:#24365f}
.owner-box .ic{width:22px;height:22px}
</style>
<?php /**PATH D:\lara\la-saas\resources\views/vendor/sazeh/partials/styles.blade.php ENDPATH**/ ?>