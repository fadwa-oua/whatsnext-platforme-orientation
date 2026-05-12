<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>What's Next — Administration</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,700&family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.min.js"></script>
<style>
:root {
  --navy:     #1a2540;
  --navy2:    #243057;
  --mid:      #3b5080;
  --btn:      #7a9ec0;
  --accent:   #5b7fc5;
  --light:    #e8f1fb;
  --muted:    #5a6a82;
  --off:      #f4f7fb;
  --white:    #ffffff;
  --success:  #27ae60;
  --danger:   #e74c3c;
  --warn:     #f39c12;
  --info:     #2980b9;
  --card:     rgba(255,255,255,0.96);
  --shadow:   0 4px 24px rgba(59,80,128,0.10);
  --shadow-lg:0 12px 48px rgba(26,37,64,0.16);
  --radius:   16px;
  --sidebar-w:260px;
  --t:        0.28s cubic-bezier(.4,0,.2,1);
}

*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{
  font-family:'DM Sans',sans-serif;
  background:#eef2f9;
  color:var(--navy);
  min-height:100vh;
  display:flex;
  overflow-x:hidden;
}

/* ═══════════════════════════════════
   SIDEBAR
═══════════════════════════════════ */
.sidebar{
  position:fixed;top:0;left:0;bottom:0;
  width:var(--sidebar-w);
  background:var(--navy);
  display:flex;flex-direction:column;
  z-index:100;
  transition:transform var(--t);
  box-shadow:4px 0 32px rgba(10,18,40,.25);
}

.sb-logo{
  padding:1.6rem 1.5rem 1.2rem;
  border-bottom:1px solid rgba(255,255,255,.08);
  display:flex;align-items:center;gap:10px;
}
.sb-logo-icon{
  width:40px;height:40px;border-radius:10px;
  background:linear-gradient(135deg,var(--accent),var(--btn));
  display:flex;align-items:center;justify-content:center;
  font-family:'Cormorant Garamond',serif;font-style:italic;
  font-size:1.1rem;font-weight:700;color:#fff;flex-shrink:0;
}
.sb-logo-text{font-family:'Cormorant Garamond',serif;font-style:italic;font-size:1.15rem;font-weight:700;color:#fff;letter-spacing:.02em;line-height:1.2;}
.sb-logo-sub{font-size:.65rem;color:rgba(255,255,255,.4);font-weight:500;letter-spacing:.08em;text-transform:uppercase;font-family:'DM Sans',sans-serif;font-style:normal;}

.sb-admin-badge{
  margin:1rem 1.2rem .5rem;
  background:rgba(255,255,255,.06);
  border:1px solid rgba(255,255,255,.1);
  border-radius:10px;padding:.65rem 1rem;
  display:flex;align-items:center;gap:.75rem;
}
.sb-avatar{
  width:34px;height:34px;border-radius:50%;
  background:linear-gradient(135deg,var(--btn),var(--mid));
  display:flex;align-items:center;justify-content:center;
  font-size:.8rem;font-weight:700;color:#fff;flex-shrink:0;
}
.sb-admin-name{font-size:.82rem;font-weight:600;color:#fff;line-height:1.2;}
.sb-admin-role{font-size:.65rem;color:rgba(255,255,255,.45);font-weight:400;letter-spacing:.05em;text-transform:uppercase;}

.sb-nav{flex:1;padding:.5rem 0;overflow-y:auto;}
.sb-section{padding:.6rem 1.2rem .2rem;font-size:.62rem;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:rgba(255,255,255,.28);}
.sb-item{
  display:flex;align-items:center;gap:.75rem;
  padding:.72rem 1.2rem;margin:.1rem .6rem;border-radius:10px;
  color:rgba(255,255,255,.65);font-size:.83rem;font-weight:500;
  cursor:pointer;transition:var(--t);text-decoration:none;
  position:relative;
}
.sb-item svg{width:17px;height:17px;stroke:currentColor;fill:none;stroke-width:1.8;flex-shrink:0;}
.sb-item:hover{background:rgba(255,255,255,.08);color:#fff;}
.sb-item.active{background:rgba(122,158,192,.18);color:#fff;}
.sb-item.active::before{
  content:'';position:absolute;left:0;top:20%;bottom:20%;
  width:3px;border-radius:0 2px 2px 0;background:var(--btn);
}
.sb-badge{
  margin-left:auto;padding:2px 7px;border-radius:20px;
  background:var(--accent);color:#fff;font-size:.62rem;font-weight:700;
  font-family:'DM Mono',monospace;
}

.sb-footer{
  padding:1rem 1.2rem;border-top:1px solid rgba(255,255,255,.07);
  display:flex;flex-direction:column;gap:.5rem;
}
.sb-footer-btn{
  display:flex;align-items:center;gap:.6rem;
  padding:.55rem .8rem;border-radius:8px;
  color:rgba(255,255,255,.5);font-size:.78rem;font-weight:500;
  cursor:pointer;transition:var(--t);border:none;background:none;width:100%;
}
.sb-footer-btn svg{width:15px;height:15px;stroke:currentColor;fill:none;stroke-width:1.8;}
.sb-footer-btn:hover{background:rgba(255,255,255,.07);color:rgba(255,255,255,.8);}
.sb-footer-btn.danger:hover{color:#f5a09a;}

/* ═══════════════════════════════════
   MAIN
═══════════════════════════════════ */
.main{
  margin-left:var(--sidebar-w);
  flex:1;min-height:100vh;
  display:flex;flex-direction:column;
}

/* TOPBAR */
.topbar{
  background:var(--white);
  height:68px;display:flex;align-items:center;justify-content:space-between;
  padding:0 2rem;
  border-bottom:1px solid rgba(122,158,192,.12);
  box-shadow:0 2px 12px rgba(59,80,128,.06);
  position:sticky;top:0;z-index:50;
}
.tb-left{display:flex;align-items:center;gap:1rem;}
.tb-page-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--navy);}
.tb-breadcrumb{font-size:.75rem;color:var(--muted);display:flex;align-items:center;gap:.3rem;}
.tb-breadcrumb span{color:var(--btn);}

.tb-right{display:flex;align-items:center;gap:1rem;}
.tb-search{
  display:flex;align-items:center;gap:.5rem;
  padding:.45rem 1rem;border-radius:20px;
  border:1.5px solid rgba(122,158,192,.25);background:var(--off);
  font-size:.82rem;color:var(--muted);cursor:pointer;
  transition:border-color .2s;
}
.tb-search svg{width:14px;height:14px;stroke:var(--btn);fill:none;stroke-width:2;}
.tb-search:hover{border-color:var(--btn);}
.tb-icon-btn{
  width:38px;height:38px;border-radius:10px;border:1.5px solid rgba(122,158,192,.2);
  background:transparent;display:flex;align-items:center;justify-content:center;
  cursor:pointer;transition:var(--t);position:relative;
}
.tb-icon-btn svg{width:16px;height:16px;stroke:var(--mid);fill:none;stroke-width:1.8;}
.tb-icon-btn:hover{background:var(--light);border-color:var(--btn);}
.tb-notif-dot{
  position:absolute;top:6px;right:6px;width:7px;height:7px;
  border-radius:50%;background:#e74c3c;border:2px solid #fff;
}
.tb-date{font-size:.75rem;color:var(--muted);font-weight:500;}

/* ═══════════════════════════════════
   CONTENT
═══════════════════════════════════ */
.content{padding:1.8rem 2rem;flex:1;}

/* ── SECTIONS ── */
.section{display:none;}
.section.active{display:block;animation:fadeUp .4s both;}
@keyframes fadeUp{from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:none}}

/* ── SECTION HEADER ── */
.sec-hdr{display:flex;align-items:center;justify-content:space-between;margin-bottom:1.6rem;flex-wrap:wrap;gap:.8rem;}
.sec-hdr-left h2{font-family:'Cormorant Garamond',serif;font-size:1.6rem;font-weight:700;color:var(--navy);margin-bottom:.15rem;}
.sec-hdr-left p{font-size:.82rem;color:var(--muted);}
.sec-hdr-right{display:flex;gap:.6rem;flex-wrap:wrap;}

/* ── BUTTONS ── */
.btn{
  display:inline-flex;align-items:center;gap:.45rem;
  padding:.6rem 1.2rem;border-radius:10px;border:none;
  font-family:'DM Sans',sans-serif;font-size:.8rem;font-weight:600;
  cursor:pointer;transition:var(--t);letter-spacing:.02em;
}
.btn svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2;}
.btn-primary{background:var(--mid);color:#fff;}
.btn-primary:hover{background:#2e4070;transform:translateY(-1px);box-shadow:0 6px 18px rgba(59,80,128,.35);}
.btn-outline{background:transparent;color:var(--mid);border:1.5px solid rgba(122,158,192,.4);}
.btn-outline:hover{background:var(--light);border-color:var(--mid);}
.btn-danger{background:var(--danger);color:#fff;}
.btn-danger:hover{background:#c0392b;transform:translateY(-1px);}
.btn-success{background:var(--success);color:#fff;}
.btn-success:hover{background:#219a52;transform:translateY(-1px);}
.btn-warn{background:var(--warn);color:#fff;}
.btn-warn:hover{background:#d68910;}
.btn-sm{padding:.4rem .85rem;font-size:.74rem;}

/* ── KPI CARDS ── */
.kpi-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:1.2rem;margin-bottom:1.8rem;}
.kpi-card{
  background:var(--card);border-radius:var(--radius);
  padding:1.3rem 1.5rem;border:1px solid rgba(122,158,192,.15);
  box-shadow:var(--shadow);transition:var(--t);position:relative;overflow:hidden;
}
.kpi-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-lg);}
.kpi-card::before{
  content:'';position:absolute;top:0;right:0;width:80px;height:80px;
  border-radius:0 var(--radius) 0 80px;opacity:.07;
}
.kpi-card.blue::before{background:var(--mid);}
.kpi-card.green::before{background:var(--success);}
.kpi-card.orange::before{background:var(--warn);}
.kpi-card.red::before{background:var(--danger);}
.kpi-card.purple::before{background:#8e44ad;}
.kpi-icon{
  width:44px;height:44px;border-radius:12px;
  display:flex;align-items:center;justify-content:center;
  margin-bottom:.9rem;
}
.kpi-icon svg{width:20px;height:20px;stroke:#fff;fill:none;stroke-width:1.8;}
.kpi-card.blue .kpi-icon{background:linear-gradient(135deg,var(--accent),var(--mid));}
.kpi-card.green .kpi-icon{background:linear-gradient(135deg,#2ecc71,var(--success));}
.kpi-card.orange .kpi-icon{background:linear-gradient(135deg,#f7ca74,var(--warn));}
.kpi-card.red .kpi-icon{background:linear-gradient(135deg,#ff6b6b,var(--danger));}
.kpi-card.purple .kpi-icon{background:linear-gradient(135deg,#bb8fce,#8e44ad);}
.kpi-val{font-family:'DM Mono',monospace;font-size:2rem;font-weight:500;color:var(--navy);line-height:1;margin-bottom:.3rem;}
.kpi-label{font-size:.78rem;color:var(--muted);font-weight:500;margin-bottom:.5rem;}
.kpi-trend{display:flex;align-items:center;gap:.3rem;font-size:.73rem;font-weight:600;}
.kpi-trend.up{color:var(--success);}
.kpi-trend.down{color:var(--danger);}
.kpi-trend.neutral{color:var(--muted);}
.kpi-trend svg{width:12px;height:12px;stroke:currentColor;fill:none;stroke-width:2.5;}

/* ── CHARTS ── */
.charts-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.2rem;margin-bottom:1.8rem;}
.chart-card{background:var(--card);border-radius:var(--radius);padding:1.4rem;border:1px solid rgba(122,158,192,.15);box-shadow:var(--shadow);}
.chart-card.wide{grid-column:1/-1;}
.chart-hdr{display:flex;align-items:center;justify-content:space-between;margin-bottom:1.2rem;}
.chart-title{font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--navy);}
.chart-sub{font-size:.72rem;color:var(--muted);margin-top:.1rem;}
.chart-wrap{position:relative;height:220px;}
.chart-wrap.tall{height:280px;}
.domain-admin-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(190px,1fr));gap:.9rem;margin-bottom:1.2rem;}
.domain-admin-card{background:linear-gradient(135deg,rgba(255,255,255,.96),rgba(232,241,251,.92));border:1px solid rgba(122,158,192,.18);box-shadow:var(--shadow);border-radius:var(--radius);padding:1rem;position:relative;overflow:hidden;}
.domain-admin-card::before{content:'';position:absolute;left:0;top:0;bottom:0;width:4px;background:var(--dcolor,#5b7fc5);}
.domain-admin-name{font-family:'Cormorant Garamond',serif;font-weight:700;font-size:1.05rem;color:var(--navy);margin-bottom:.35rem;}
.domain-admin-meta{display:flex;align-items:center;justify-content:space-between;font-size:.76rem;color:var(--muted);gap:.7rem;}
.domain-admin-count{font-family:'DM Mono',monospace;font-weight:700;color:var(--mid);}
.domain-admin-bar{height:6px;border-radius:20px;background:rgba(122,158,192,.14);overflow:hidden;margin-top:.75rem;}
.domain-admin-bar span{display:block;height:100%;border-radius:20px;background:var(--dcolor,#5b7fc5);}
.ecole-domain-filter{display:flex;gap:.45rem;flex-wrap:wrap;margin-bottom:1rem;}
.domain-filter-btn{border:1.5px solid rgba(122,158,192,.25);background:rgba(255,255,255,.72);color:var(--mid);border-radius:999px;padding:.45rem .8rem;font-size:.76rem;font-weight:700;cursor:pointer;transition:var(--t);}
.domain-filter-btn:hover,.domain-filter-btn.active{background:var(--mid);color:#fff;border-color:var(--mid);}

/* ── DATA TABLE ── */
.table-card{background:var(--card);border-radius:var(--radius);border:1px solid rgba(122,158,192,.15);box-shadow:var(--shadow);overflow:hidden;margin-bottom:1.4rem;}
.table-toolbar{display:flex;align-items:center;justify-content:space-between;padding:1rem 1.4rem;border-bottom:1px solid rgba(122,158,192,.1);flex-wrap:wrap;gap:.6rem;}
.table-title{font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--navy);}
.table-search{
  display:flex;align-items:center;gap:.4rem;
  padding:.42rem .9rem;border-radius:20px;
  border:1.5px solid rgba(122,158,192,.25);background:var(--off);
  font-size:.8rem;
}
.table-search svg{width:13px;height:13px;stroke:var(--btn);fill:none;stroke-width:2;}
.table-search input{border:none;background:transparent;outline:none;font-family:'DM Sans',sans-serif;font-size:.8rem;color:var(--navy);width:160px;}
.table-search input::placeholder{color:var(--muted);}

table{width:100%;border-collapse:collapse;}
thead tr{background:var(--off);}
thead th{
  padding:.75rem 1.2rem;text-align:left;
  font-size:.68rem;font-weight:600;letter-spacing:.08em;text-transform:uppercase;
  color:var(--muted);border-bottom:1px solid rgba(122,158,192,.12);
}
tbody tr{border-bottom:1px solid rgba(122,158,192,.07);transition:background .15s;}
tbody tr:hover{background:rgba(232,241,251,.5);}
tbody tr:last-child{border-bottom:none;}
td{padding:.85rem 1.2rem;font-size:.82rem;color:var(--navy);vertical-align:middle;}
.td-avatar{
  width:34px;height:34px;border-radius:50%;
  background:linear-gradient(135deg,var(--btn),var(--mid));
  display:flex;align-items:center;justify-content:center;
  font-size:.75rem;font-weight:700;color:#fff;flex-shrink:0;
  font-family:'Cormorant Garamond',serif;
}
.td-info{display:flex;align-items:center;gap:.75rem;}
.td-name{font-weight:600;color:var(--navy);}
.td-email{font-size:.73rem;color:var(--muted);}
.badge{
  display:inline-flex;align-items:center;gap:.3rem;
  padding:3px 10px;border-radius:20px;
  font-size:.68rem;font-weight:700;letter-spacing:.04em;
}
.badge-success{background:rgba(39,174,96,.12);color:#1e8449;}
.badge-warn{background:rgba(243,156,18,.12);color:#b7770d;}
.badge-danger{background:rgba(231,76,60,.12);color:#c0392b;}
.badge-info{background:rgba(41,128,185,.12);color:#1a6fa3;}
.badge-mid{background:rgba(59,80,128,.1);color:var(--mid);}
.badge-purple{background:rgba(142,68,173,.12);color:#7d3c98;}

.td-actions{display:flex;gap:.4rem;}
.act-btn{
  width:30px;height:30px;border-radius:8px;border:none;
  display:flex;align-items:center;justify-content:center;cursor:pointer;transition:var(--t);
}
.act-btn svg{width:13px;height:13px;stroke:currentColor;fill:none;stroke-width:2;}
.act-btn.view{background:rgba(59,80,128,.08);color:var(--mid);}
.act-btn.view:hover{background:var(--light);color:var(--mid);}
.act-btn.edit{background:rgba(243,156,18,.1);color:var(--warn);}
.act-btn.edit:hover{background:rgba(243,156,18,.2);}
.act-btn.del{background:rgba(231,76,60,.08);color:var(--danger);}
.act-btn.del:hover{background:rgba(231,76,60,.18);}
.act-btn.approve{background:rgba(39,174,96,.08);color:var(--success);}
.act-btn.approve:hover{background:rgba(39,174,96,.18);}

.table-footer{
  display:flex;align-items:center;justify-content:space-between;
  padding:.85rem 1.4rem;border-top:1px solid rgba(122,158,192,.1);
  font-size:.76rem;color:var(--muted);flex-wrap:wrap;gap:.5rem;
}
.pagination{display:flex;gap:.3rem;}
.page-btn{
  width:30px;height:30px;border-radius:7px;border:1.5px solid rgba(122,158,192,.25);
  background:transparent;font-size:.76rem;font-weight:500;
  color:var(--muted);cursor:pointer;display:flex;align-items:center;justify-content:center;transition:var(--t);
}
.page-btn.active{background:var(--mid);color:#fff;border-color:var(--mid);}
.page-btn:hover:not(.active){background:var(--light);}

/* ── ACTIVITY FEED ── */
.activity-card{background:var(--card);border-radius:var(--radius);padding:1.4rem;border:1px solid rgba(122,158,192,.15);box-shadow:var(--shadow);}
.activity-item{display:flex;gap:.9rem;align-items:flex-start;padding:.75rem 0;border-bottom:1px solid rgba(122,158,192,.07);}
.activity-item:last-child{border-bottom:none;padding-bottom:0;}
.activity-dot{
  width:8px;height:8px;border-radius:50%;margin-top:.45rem;flex-shrink:0;
}
.activity-dot.green{background:var(--success);}
.activity-dot.blue{background:var(--accent);}
.activity-dot.orange{background:var(--warn);}
.activity-dot.red{background:var(--danger);}
.activity-text{font-size:.8rem;color:var(--navy);line-height:1.5;}
.activity-text strong{font-weight:600;}
.activity-time{font-size:.7rem;color:var(--muted);margin-top:.15rem;}

/* ── MODAL ── */
.modal-overlay{
  display:none;position:fixed;inset:0;z-index:500;
  background:rgba(10,18,40,.5);backdrop-filter:blur(4px);
  align-items:center;justify-content:center;
}
.modal-overlay.open{display:flex;animation:fadeIn .25s both;}
@keyframes fadeIn{from{opacity:0}to{opacity:1}}
.modal{
  background:#fff;border-radius:20px;padding:2rem;
  width:100%;max-width:480px;margin:1rem;
  box-shadow:0 24px 80px rgba(10,18,40,.25);
  animation:slideUp .3s cubic-bezier(.22,.8,.36,1) both;
}
@keyframes slideUp{from{opacity:0;transform:translateY(32px)}to{opacity:1;transform:none}}
.modal-hdr{display:flex;align-items:center;justify-content:space-between;margin-bottom:1.4rem;}
.modal-title{font-family:'Cormorant Garamond',serif;font-size:1.25rem;font-weight:700;color:var(--navy);}
.modal-close{width:32px;height:32px;border-radius:8px;border:none;background:var(--off);cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--muted);transition:var(--t);}
.modal-close:hover{background:var(--light);color:var(--navy);}
.modal-close svg{width:15px;height:15px;stroke:currentColor;fill:none;stroke-width:2;}
.form-group{margin-bottom:1rem;}
.form-label{display:block;font-size:.72rem;font-weight:600;color:var(--muted);text-transform:uppercase;letter-spacing:.07em;margin-bottom:.4rem;}
.form-input,.form-select{
  width:100%;padding:.65rem .9rem;border-radius:10px;
  border:1.5px solid rgba(122,158,192,.28);background:var(--off);
  font-family:'DM Sans',sans-serif;font-size:.85rem;color:var(--navy);
  outline:none;transition:border-color .2s,box-shadow .2s;
}
.form-input:focus,.form-select:focus{border-color:var(--btn);box-shadow:0 0 0 3px rgba(122,158,192,.15);}
.form-select{appearance:none;cursor:pointer;}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:.8rem;}
.modal-actions{display:flex;gap:.6rem;justify-content:flex-end;margin-top:1.4rem;}

/* ── STAT BOX ── */
.stat-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:1rem;margin-bottom:1.4rem;}
.stat-box{
  background:var(--card);border-radius:12px;padding:1.1rem 1.2rem;
  border:1px solid rgba(122,158,192,.12);box-shadow:var(--shadow);
  display:flex;align-items:center;gap:.9rem;
}
.stat-box-icon{width:40px;height:40px;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;}
.stat-box-icon svg{width:18px;height:18px;stroke:#fff;fill:none;stroke-width:1.8;}
.stat-val{font-family:'DM Mono',monospace;font-size:1.4rem;font-weight:500;color:var(--navy);line-height:1;}
.stat-lbl{font-size:.72rem;color:var(--muted);margin-top:.2rem;}

/* ── TOAST ── */
.toast{
  position:fixed;bottom:1.5rem;right:1.5rem;z-index:900;
  padding:.85rem 1.4rem;border-radius:12px;font-size:.83rem;font-weight:500;
  color:#fff;box-shadow:0 8px 32px rgba(10,18,40,.25);
  transform:translateY(80px);opacity:0;transition:all .3s cubic-bezier(.4,0,.2,1);
  pointer-events:none;display:flex;align-items:center;gap:.6rem;
}
.toast.show{transform:none;opacity:1;}
.toast.success{background:var(--success);}
.toast.error{background:var(--danger);}
.toast.info{background:var(--accent);}
.toast svg{width:16px;height:16px;stroke:currentColor;fill:none;stroke-width:2;}

/* ── PROGRESS BAR ── */
.prog-item{margin-bottom:.9rem;}
.prog-hdr{display:flex;justify-content:space-between;font-size:.78rem;margin-bottom:.35rem;}
.prog-hdr span:first-child{font-weight:500;color:var(--navy);}
.prog-hdr span:last-child{font-weight:600;color:var(--mid);font-family:'DM Mono',monospace;}
.prog-bar{height:7px;border-radius:4px;background:rgba(122,158,192,.15);overflow:hidden;}
.prog-fill{height:100%;border-radius:4px;transition:width 1s cubic-bezier(.4,0,.2,1);}

/* ── CONFIRM BOX ── */
.confirm-modal{
  background:#fff;border-radius:20px;padding:2rem;
  width:100%;max-width:380px;margin:1rem;
  box-shadow:0 24px 80px rgba(10,18,40,.25);
  text-align:center;animation:slideUp .3s cubic-bezier(.22,.8,.36,1) both;
}
.confirm-icon{width:56px;height:56px;border-radius:50%;background:rgba(231,76,60,.1);display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;}
.confirm-icon svg{width:24px;height:24px;stroke:var(--danger);fill:none;stroke-width:2;}
.confirm-title{font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:700;color:var(--navy);margin-bottom:.5rem;}
.confirm-text{font-size:.83rem;color:var(--muted);line-height:1.6;margin-bottom:1.4rem;}
.confirm-actions{display:flex;gap:.6rem;justify-content:center;}

/* ── TOP REGIONS ── */
.regions-list{display:flex;flex-direction:column;gap:.6rem;}
.region-item{display:flex;align-items:center;gap:.8rem;}
.region-name{font-size:.8rem;font-weight:500;color:var(--navy);width:90px;flex-shrink:0;}
.region-bar-wrap{flex:1;height:8px;background:rgba(122,158,192,.12);border-radius:4px;overflow:hidden;}
.region-bar{height:100%;border-radius:4px;background:linear-gradient(90deg,var(--btn),var(--mid));}
.region-count{font-size:.75rem;font-weight:600;color:var(--mid);font-family:'DM Mono',monospace;width:32px;text-align:right;flex-shrink:0;}

@media(max-width:900px){
  .sidebar{transform:translateX(-100%);}
  .sidebar.open{transform:none;}
  .main{margin-left:0;}
  .charts-grid{grid-template-columns:1fr;}
  .kpi-grid{grid-template-columns:repeat(2,1fr);}
}
@media(max-width:500px){
  .kpi-grid{grid-template-columns:1fr;}
  .content{padding:1rem;}
}
</style>
</head>
<body>

<!-- ══ SIDEBAR ══ -->
<aside class="sidebar" id="sidebar">
  <div class="sb-logo">
    <div class="sb-logo-icon">W</div>
    <div>
      <div class="sb-logo-text">What's Next ?</div>
      <div class="sb-logo-sub">Administration</div>
    </div>
  </div>

  <div class="sb-admin-badge">
    <div class="sb-avatar">AD</div>
    <div>
      <div class="sb-admin-name">Admin Principal</div>
      <div class="sb-admin-role">Super Admin</div>
    </div>
  </div>

  <nav class="sb-nav">
    <div class="sb-section">Vue générale</div>
    <a class="sb-item active" onclick="showSection('dashboard',this)">
      <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
      Tableau de bord
    </a>
    <a class="sb-item" onclick="showSection('stats',this)">
      <svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
      Statistiques
    </a>

    <div class="sb-section">Gestion</div>
    <a class="sb-item" onclick="showSection('etudiants',this)">
      <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
      Étudiants
      <span class="sb-badge" id="sb-etud-count">—</span>
    </a>
    <a class="sb-item" onclick="showSection('consultants',this)">
      <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      Consultants
      <span class="sb-badge" id="sb-cons-count">—</span>
    </a>
    <a class="sb-item" onclick="showSection('ecoles',this)">
      <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      Établissements
    </a>

    <div class="sb-section">Base de données</div>
    <a class="sb-item" onclick="showSection('database',this)">
      <svg viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
      Base de données
    </a>
    <a class="sb-item" onclick="showSection('logs',this)">
      <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="16" y2="17"/><polyline points="14 2 14 8 20 8"/></svg>
      Journaux d'activité
    </a>
  </nav>

  <div class="sb-footer">
    <button class="sb-footer-btn">
      <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93A10 10 0 1 0 4.93 19.07"/></svg>
      Paramètres
    </button>
    <button class="sb-footer-btn danger" onclick="showToast('Déconnexion…','info')">
      <svg viewBox="0 0 24 24"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
      Déconnexion
    </button>
  </div>
</aside>

<!-- ══ MAIN ══ -->
<div class="main">

  <!-- TOPBAR -->
  <div class="topbar">
    <div class="tb-left">
      <div class="tb-page-title" id="tbTitle">Tableau de bord</div>
    </div>
    <div class="tb-right">
      <div class="tb-date" id="tbDate"></div>
      <button class="tb-icon-btn" onclick="showSection('logs',document.querySelector('[onclick*=logs]'))">
        <svg viewBox="0 0 24 24"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0"/></svg>
        <span class="tb-notif-dot"></span>
      </button>
      <button class="tb-icon-btn">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg>
      </button>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : DASHBOARD
  ══════════════════════════════════ -->
  <div class="content">

  <div class="section active" id="sec-dashboard">
    <div class="sec-hdr">
      <div class="sec-hdr-left">
        <h2>Vue d'ensemble</h2>
        <p>Données en temps réel de la plateforme What's Next</p>
      </div>
      <div class="sec-hdr-right">
        <button class="btn btn-outline" onclick="refreshData()">
          <svg viewBox="0 0 24 24"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 11-2.12-9.36L23 10"/></svg>
          Actualiser
        </button>
        <button class="btn btn-primary" onclick="exportData()">
          <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Exporter
        </button>
      </div>
    </div>

    <!-- KPI -->
    <div class="kpi-grid">
      <div class="kpi-card blue">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <div class="kpi-val" id="kpi-etudiants">248</div>
        <div class="kpi-label">Étudiants inscrits</div>
        <div class="kpi-trend up"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>+12% ce mois</div>
      </div>
      <div class="kpi-card green">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <div class="kpi-val" id="kpi-consultants">34</div>
        <div class="kpi-label">Consultants actifs</div>
        <div class="kpi-trend up"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>+5 nouveaux</div>
      </div>
      <div class="kpi-card orange">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h16"/></svg></div>
        <div class="kpi-val" id="kpi-domaines">8</div>
        <div class="kpi-label">Domaines gérés</div>
        <div class="kpi-trend up"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>Couverture complète</div>
      </div>
      <div class="kpi-card red">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
        <div class="kpi-val" id="kpi-consultations">0</div>
        <div class="kpi-label">Consultations</div>
        <div class="kpi-trend neutral"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/></svg>Suivi activité</div>
      </div>
      <div class="kpi-card purple">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div>
        <div class="kpi-val" id="kpi-ecoles">32</div>
        <div class="kpi-label">Établissements</div>
        <div class="kpi-trend neutral"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/></svg>Stable</div>
      </div>
    </div>

    <!-- CHARTS ROW 1 -->
    <div class="charts-grid">
      <div class="chart-card">
        <div class="chart-hdr">
          <div>
            <div class="chart-title">Inscriptions mensuelles</div>
            <div class="chart-sub">Étudiants + Consultants — 2025</div>
          </div>
        </div>
        <div class="chart-wrap"><canvas id="chartInscriptions"></canvas></div>
      </div>
      <div class="chart-card">
        <div class="chart-hdr">
          <div>
            <div class="chart-title">Répartition par domaine</div>
            <div class="chart-sub">Intérêt des étudiants</div>
          </div>
        </div>
        <div class="chart-wrap"><canvas id="chartDomaines"></canvas></div>
      </div>
      <div class="chart-card wide">
        <div class="chart-hdr">
          <div>
            <div class="chart-title">Activité hebdomadaire</div>
            <div class="chart-sub">Connexions, consultations et publications</div>
          </div>
        </div>
        <div class="chart-wrap tall"><canvas id="chartActivite"></canvas></div>
      </div>
    </div>

    <!-- BOTTOM ROW -->
    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:1.2rem;">

      <!-- Top régions -->
      <div class="chart-card">
        <div class="chart-hdr"><div class="chart-title">Top villes</div></div>
        <div class="regions-list" id="regionsList"></div>
      </div>

      <!-- Répartition statut consultants -->
      <div class="chart-card">
        <div class="chart-hdr"><div><div class="chart-title">Statut consultants</div></div></div>
        <div class="chart-wrap"><canvas id="chartConsStatus"></canvas></div>
      </div>

      <!-- Activité récente -->
      <div class="activity-card">
        <div class="chart-hdr" style="margin-bottom:.4rem"><div class="chart-title">Activité récente</div></div>
        <div id="activityFeed"></div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : STATISTIQUES
  ══════════════════════════════════ -->
  <div class="section" id="sec-stats">
    <div class="sec-hdr">
      <div class="sec-hdr-left">
        <h2>Statistiques avancées</h2>
        <p>Analyses détaillées de la plateforme</p>
      </div>
      <div class="sec-hdr-right">
        <button class="btn btn-primary" onclick="exportData()">
          <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Rapport PDF
        </button>
      </div>
    </div>

    <div class="stat-grid">
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#5b7fc5,#3b5080)"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><div><div class="stat-val">248</div><div class="stat-lbl">Total étudiants</div></div></div>
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#2ecc71,#27ae60)"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div><div><div class="stat-val">94%</div><div class="stat-lbl">Taux activation</div></div></div>
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#f7ca74,#f39c12)"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="stat-val">4.7</div><div class="stat-lbl">Note moyenne</div></div></div>
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#bb8fce,#8e44ad)"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><div><div class="stat-val">1 204</div><div class="stat-lbl">Consultations</div></div></div>
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#ff6b6b,#e74c3c)"><svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div><div><div class="stat-val">18 min</div><div class="stat-lbl">Durée moy. session</div></div></div>
      <div class="stat-box"><div class="stat-box-icon" style="background:linear-gradient(135deg,#5dade2,#2980b9)"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div><div><div class="stat-val">32</div><div class="stat-lbl">Établissements</div></div></div>
    </div>

    <div class="charts-grid">
      <div class="chart-card">
        <div class="chart-hdr"><div><div class="chart-title">Croissance des inscrits</div><div class="chart-sub">Évolution cumulée 2025</div></div></div>
        <div class="chart-wrap tall"><canvas id="chartCroissance"></canvas></div>
      </div>
      <div class="chart-card">
        <div class="chart-hdr"><div><div class="chart-title">Filières les plus consultées</div></div></div>
        <div class="chart-wrap tall"><canvas id="chartFilieres"></canvas></div>
      </div>
    </div>

    <!-- Progression par domaine -->
    <div class="chart-card" style="margin-bottom:1.2rem">
      <div class="chart-hdr"><div class="chart-title">Popularité par domaine</div></div>
      <div id="domaineProgress"></div>
    </div>

    <!-- Taux conversion -->
    <div class="chart-card wide">
      <div class="chart-hdr"><div><div class="chart-title">Entonnoir de conversion</div><div class="chart-sub">Visite → Inscription → Consultation → Abonnement</div></div></div>
      <div class="chart-wrap"><canvas id="chartEntonnoir"></canvas></div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : ÉTUDIANTS
  ══════════════════════════════════ -->
  <div class="section" id="sec-etudiants">
    <div class="sec-hdr">
      <div class="sec-hdr-left">
        <h2>Gestion des étudiants</h2>
        <p><span id="etud-count-label">248</span> étudiants enregistrés</p>
      </div>
      <div class="sec-hdr-right">
        <button class="btn btn-outline" onclick="openModal('modal-add-etudiant')">
          <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          Ajouter
        </button>
        <button class="btn btn-primary" onclick="exportData()">
          <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/></svg>
          Exporter CSV
        </button>
      </div>
    </div>

    <div class="table-card">
      <div class="table-toolbar">
        <div class="table-title">Liste des étudiants</div>
        <div style="display:flex;gap:.5rem;flex-wrap:wrap;">
          <div class="table-search">
            <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
            <input type="text" placeholder="Rechercher…" oninput="filterTable(this,'etud-tbody')">
          </div>
          <select class="btn btn-outline btn-sm" style="cursor:pointer;background:var(--off);" onchange="filterByStatus(this,'etud-tbody')">
            <option value="">Tous statuts</option>
            <option value="Actif">Actif</option>
            <option value="Inactif">Inactif</option>
            <option value="Suspendu">Suspendu</option>
          </select>
        </div>
      </div>
      <div style="overflow-x:auto;">
      <table>
        <thead><tr>
          <th>Étudiant</th><th>Ville</th><th>Domaine d'intérêt</th><th>Inscription</th><th>Statut</th><th>Actions</th>
        </tr></thead>
        <tbody id="etud-tbody"></tbody>
      </table>
      </div>
      <div class="table-footer">
        <span id="etud-count-footer">Affichage de 10 sur 248</span>
        <div class="pagination">
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">3</button>
          <button class="page-btn">›</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : CONSULTANTS
  ══════════════════════════════════ -->
  <div class="section" id="sec-consultants">
    <div class="sec-hdr">
      <div class="sec-hdr-left">
        <h2>Gestion des consultants</h2>
        <p><span id="cons-count-label">34</span> consultants sur la plateforme</p>
      </div>
      <div class="sec-hdr-right">
        <button class="btn btn-outline" onclick="openModal('modal-add-consultant')">
          <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          Ajouter
        </button>
      </div>
    </div>

    <div class="table-card">
      <div class="table-toolbar">
        <div class="table-title">Liste des consultants</div>
        <div class="table-search">
          <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
          <input type="text" placeholder="Rechercher…" oninput="filterTable(this,'cons-tbody')">
        </div>
      </div>
      <div style="overflow-x:auto;">
      <table>
        <thead><tr>
          <th>Consultant</th><th>Métier</th><th>École</th><th>Consultations</th><th>Statut</th><th>Actions</th>
        </tr></thead>
        <tbody id="cons-tbody"></tbody>
      </table>
      </div>
      <div class="table-footer">
        <span>Affichage de 10 sur 34</span>
        <div class="pagination">
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">›</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : CANDIDATURES
  ══════════════════════════════════ -->
  <div class="section" id="sec-applications">
    <div class="sec-hdr">
      <div class="sec-hdr-left">
        <h2>Candidatures consultants</h2>
        <p>Demandes d'intégration à valider</p>
      </div>
    </div>

    <div class="table-card">
      <div class="table-toolbar">
        <div class="table-title">Candidatures reçues</div>
        <div style="display:flex;gap:.5rem;">
          <span class="badge badge-warn">19 en attente</span>
          <span class="badge badge-success">68 approuvées</span>
        </div>
      </div>
      <div style="overflow-x:auto;">
      <table>
        <thead><tr>
          <th>Candidat</th><th>Domaine</th><th>École</th><th>Date</th><th>Statut</th><th>Actions</th>
        </tr></thead>
        <tbody id="app-tbody"></tbody>
      </table>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : ÉTABLISSEMENTS
  ══════════════════════════════════ -->
  <div class="section" id="sec-ecoles">
    <div class="sec-hdr">
      <div class="sec-hdr-left"><h2>Établissements & domaines</h2><p><span id="ecole-count-label">0</span> établissements organisés par domaine</p></div>
      <div class="sec-hdr-right">
        <button class="btn btn-primary" onclick="openModal('modal-add-ecole')">
          <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          Ajouter une école
        </button>
      </div>
    </div>
    <div class="domain-admin-grid" id="domainAdminGrid"></div>
    <div class="ecole-domain-filter" id="domainFilterBar"></div>
    <div class="table-card">
      <div class="table-toolbar">
        <div class="table-title">Liste des établissements</div>
        <div class="table-search">
          <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
          <input type="text" placeholder="Rechercher…" oninput="filterTable(this,'ecole-tbody')">
        </div>
      </div>
      <div style="overflow-x:auto;">
      <table>
        <thead><tr><th>École</th><th>Domaine</th><th>Villes</th><th>Durée</th><th>Actions</th></tr></thead>
        <tbody id="ecole-tbody"></tbody>
      </table>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : BASE DE DONNÉES
  ══════════════════════════════════ -->
  <div class="section" id="sec-database">
    <div class="sec-hdr">
      <div class="sec-hdr-left"><h2>Gestion base de données</h2><p>Opérations CRUD et maintenance</p></div>
      <div class="sec-hdr-right">
        <button class="btn btn-warn" onclick="showToast('Sauvegarde démarrée…','info')">
          <svg viewBox="0 0 24 24"><path d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
          Sauvegarder
        </button>
        <button class="btn btn-danger" onclick="openModal('modal-reset-db')">
          <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg>
          Réinitialiser
        </button>
      </div>
    </div>

    <!-- DB Stats -->
    <div class="kpi-grid" style="margin-bottom:1.4rem;">
      <div class="kpi-card blue">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg></div>
        <div class="kpi-val">4.2 MB</div>
        <div class="kpi-label">Taille de la base</div>
        <div class="kpi-trend up"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>+0.3 MB</div>
      </div>
      <div class="kpi-card green">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <div class="kpi-val">5</div>
        <div class="kpi-label">Tables actives</div>
        <div class="kpi-trend neutral"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/></svg>Stable</div>
      </div>
      <div class="kpi-card orange">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="kpi-val">99.8%</div>
        <div class="kpi-label">Disponibilité</div>
        <div class="kpi-trend up"><svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg>Excellente</div>
      </div>
      <div class="kpi-card purple">
        <div class="kpi-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <div class="kpi-val">2h</div>
        <div class="kpi-label">Dernière sauvegarde</div>
        <div class="kpi-trend neutral"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/></svg>Auto</div>
      </div>
    </div>

    <!-- Tables -->
    <div class="table-card">
      <div class="table-toolbar"><div class="table-title">Tables de la base de données</div></div>
      <table>
        <thead><tr><th>Table</th><th>Entrées</th><th>Taille</th><th>Dernière modif.</th><th>Actions</th></tr></thead>
        <tbody id="db-tbody"></tbody>
      </table>
    </div>
  </div>

  <!-- ══════════════════════════════════
       SECTION : JOURNAUX
  ══════════════════════════════════ -->
  <div class="section" id="sec-logs">
    <div class="sec-hdr">
      <div class="sec-hdr-left"><h2>Journaux d'activité</h2><p>Historique complet des actions admin</p></div>
      <div class="sec-hdr-right">
        <button class="btn btn-outline" onclick="showToast('Journaux exportés','success')">
          <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/></svg>
          Exporter
        </button>
      </div>
    </div>
    <div class="table-card">
      <div class="table-toolbar"><div class="table-title">Logs récents</div></div>
      <table>
        <thead><tr><th>Horodatage</th><th>Utilisateur</th><th>Action</th><th>Entité</th><th>IP</th><th>Statut</th></tr></thead>
        <tbody id="logs-tbody"></tbody>
      </table>
    </div>
  </div>

  </div><!-- /content -->
</div><!-- /main -->

<!-- ════════════════════
     MODALS
════════════════════ -->

<!-- Add Étudiant -->
<div class="modal-overlay" id="modal-add-etudiant" onclick="closeModal(event,this)">
  <div class="modal" onclick="event.stopPropagation()">
    <div class="modal-hdr">
      <div class="modal-title">Ajouter un étudiant</div>
      <button class="modal-close" onclick="closeModal(null,document.getElementById('modal-add-etudiant'))"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
    </div>
    <div class="form-row">
      <div class="form-group"><label class="form-label">Nom</label><input class="form-input" placeholder="Alami"></div>
      <div class="form-group"><label class="form-label">Prénom</label><input class="form-input" placeholder="Yassine"></div>
    </div>
    <div class="form-group"><label class="form-label">Email</label><input class="form-input" type="email" placeholder="yassine@email.com"></div>
    <div class="form-row">
      <div class="form-group"><label class="form-label">Ville</label><select class="form-select"><option>Rabat</option><option>Casablanca</option><option>Fès</option><option>Marrakech</option><option>Agadir</option></select></div>
      <div class="form-group"><label class="form-label">Domaine d'intérêt</label><select class="form-select"><option>Ingénierie</option><option>Santé</option><option>Commerce</option><option>Droit</option><option>Éducation</option></select></div>
    </div>
    <div class="modal-actions">
      <button class="btn btn-outline" onclick="closeModal(null,document.getElementById('modal-add-etudiant'))">Annuler</button>
      <button class="btn btn-primary" onclick="addEtudiant()">
        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Ajouter
      </button>
    </div>
  </div>
</div>

<!-- Add Consultant -->
<div class="modal-overlay" id="modal-add-consultant" onclick="closeModal(event,this)">
  <div class="modal" onclick="event.stopPropagation()">
    <div class="modal-hdr">
      <div class="modal-title">Ajouter un consultant</div>
      <button class="modal-close" onclick="closeModal(null,document.getElementById('modal-add-consultant'))"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
    </div>
    <div class="form-row">
      <div class="form-group"><label class="form-label">Nom</label><input class="form-input" placeholder="Benali"></div>
      <div class="form-group"><label class="form-label">Prénom</label><input class="form-input" placeholder="Fatima"></div>
    </div>
    <div class="form-group"><label class="form-label">Email</label><input class="form-input" type="email" placeholder="fatima@email.com"></div>
    <div class="form-group"><label class="form-label">Titre / Poste</label><input class="form-input" placeholder="Ingénieur · ENSIAS 2018"></div>
    <div class="form-row">
      <div class="form-group"><label class="form-label">Métier</label><select class="form-select"><option>Ingénieur</option><option>Médecin</option><option>Professeur</option><option>Juriste</option><option>Économiste</option></select></div>
      <div class="form-group"><label class="form-label">École</label><select class="form-select"><option>ENSIAS</option><option>ENSA</option><option>ENCG</option><option>ENS</option><option>Autre</option></select></div>
    </div>
    <div class="modal-actions">
      <button class="btn btn-outline" onclick="closeModal(null,document.getElementById('modal-add-consultant'))">Annuler</button>
      <button class="btn btn-primary" onclick="addConsultant()">
        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Ajouter
      </button>
    </div>
  </div>
</div>

<!-- Add École -->
<div class="modal-overlay" id="modal-add-ecole" onclick="closeModal(event,this)">
  <div class="modal" onclick="event.stopPropagation()">
    <div class="modal-hdr">
      <div class="modal-title">Ajouter un établissement</div>
      <button class="modal-close" onclick="closeModal(null,document.getElementById('modal-add-ecole'))"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
    </div>
    <div class="form-group"><label class="form-label">Nom de l'école</label><input class="form-input" placeholder="ENSIAS"></div>
    <div class="form-row">
      <div class="form-group"><label class="form-label">Domaine</label><select class="form-select"><option>Ingénierie</option><option>Santé</option><option>Commerce</option><option>Droit</option><option>Éducation</option><option>Militaire</option></select></div>
      <div class="form-group"><label class="form-label">Durée (ans)</label><input class="form-input" type="number" min="1" max="8" value="5"></div>
    </div>
    <div class="form-group"><label class="form-label">Villes</label><input class="form-input" placeholder="Rabat, Casablanca…"></div>
    <div class="form-group"><label class="form-label">Description</label><textarea class="form-input" style="min-height:80px;resize:vertical;" placeholder="Description de l'école…"></textarea></div>
    <div class="modal-actions">
      <button class="btn btn-outline" onclick="closeModal(null,document.getElementById('modal-add-ecole'))">Annuler</button>
      <button class="btn btn-primary" onclick="showToast('École ajoutée avec succès','success');closeModal(null,document.getElementById('modal-add-ecole'))">
        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Ajouter
      </button>
    </div>
  </div>
</div>

<!-- Reset DB Confirm -->
<div class="modal-overlay" id="modal-reset-db" onclick="closeModal(event,this)">
  <div class="confirm-modal" onclick="event.stopPropagation()">
    <div class="confirm-icon"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></div>
    <div class="confirm-title">Réinitialiser la base ?</div>
    <div class="confirm-text">Cette action est <strong>irréversible</strong>. Toutes les données seront supprimées définitivement. Assurez-vous d'avoir effectué une sauvegarde.</div>
    <div class="confirm-actions">
      <button class="btn btn-outline" onclick="closeModal(null,document.getElementById('modal-reset-db'))">Annuler</button>
      <button class="btn btn-danger" onclick="resetDB()">Confirmer la suppression</button>
    </div>
  </div>
</div>

<!-- Delete Confirm -->
<div class="modal-overlay" id="modal-delete" onclick="closeModal(event,this)">
  <div class="confirm-modal" onclick="event.stopPropagation()">
    <div class="confirm-icon"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></div>
    <div class="confirm-title">Supprimer cet enregistrement ?</div>
    <div class="confirm-text">Cette action supprimera définitivement cet enregistrement de la base de données.</div>
    <div class="confirm-actions">
      <button class="btn btn-outline" onclick="closeModal(null,document.getElementById('modal-delete'))">Annuler</button>
      <button class="btn btn-danger" onclick="confirmDelete()">Supprimer</button>
    </div>
  </div>
</div>

<div class="toast" id="toast"></div>

<script>
/* ══════════════════════════════════
   DONNÉES SIMULÉES
══════════════════════════════════ */
const DB = {
  etudiants: [
    {id:1,nom:"El Amrani",prenom:"Yassine",email:"yassine@gmail.com",ville:"Rabat",domaine:"Ingénierie",date:"12 Jan 2025",statut:"Actif"},
    {id:2,nom:"Benali",prenom:"Fatima",email:"fatima@gmail.com",ville:"Casablanca",domaine:"Santé",date:"18 Jan 2025",statut:"Actif"},
    {id:3,nom:"Ouazzani",prenom:"Karim",email:"karim@gmail.com",ville:"Fès",domaine:"Droit",date:"22 Jan 2025",statut:"Actif"},
    {id:4,nom:"Tazi",prenom:"Sara",email:"sara@gmail.com",ville:"Marrakech",domaine:"Commerce",date:"03 Fév 2025",statut:"Inactif"},
    {id:5,nom:"Alami",prenom:"Hassan",email:"hassan@gmail.com",ville:"Agadir",domaine:"Éducation",date:"10 Fév 2025",statut:"Actif"},
    {id:6,nom:"Chraibi",prenom:"Imane",email:"imane@gmail.com",ville:"Rabat",domaine:"Ingénierie",date:"14 Fév 2025",statut:"Actif"},
    {id:7,nom:"Berrada",prenom:"Mehdi",email:"mehdi@gmail.com",ville:"Casablanca",domaine:"Commerce",date:"20 Fév 2025",statut:"Suspendu"},
    {id:8,nom:"Filali",prenom:"Nadia",email:"nadia@gmail.com",ville:"Meknès",domaine:"Santé",date:"25 Fév 2025",statut:"Actif"},
    {id:9,nom:"Kettani",prenom:"Omar",email:"omar@gmail.com",ville:"Tanger",domaine:"Ingénierie",date:"02 Mar 2025",statut:"Actif"},
    {id:10,nom:"Mansouri",prenom:"Lina",email:"lina@gmail.com",ville:"Rabat",domaine:"Arts & Design",date:"08 Mar 2025",statut:"Actif"},
  ],
  consultants: [
    {id:1,nom:"Benkirane",prenom:"Amine",email:"amine@gmail.com",metier:"Ingénieur",ecole:"ENSIAS",consultations:42,statut:"En ligne"},
    {id:2,nom:"El Idrissi",prenom:"Zineb",email:"zineb@gmail.com",metier:"Médecin",ecole:"Fac. Médecine",consultations:28,statut:"Hors ligne"},
    {id:3,nom:"Lahlou",prenom:"Tariq",email:"tariq@gmail.com",metier:"Professeur",ecole:"ENS",consultations:35,statut:"En ligne"},
    {id:4,nom:"Moussaoui",prenom:"Rim",email:"rim@gmail.com",metier:"Juriste",ecole:"Fac. Droit",consultations:19,statut:"En ligne"},
    {id:5,nom:"Tahiri",prenom:"Saad",email:"saad@gmail.com",metier:"Économiste",ecole:"ENCG",consultations:24,statut:"Hors ligne"},
    {id:6,nom:"Bouchaib",prenom:"Layla",email:"layla@gmail.com",metier:"Ingénieur",ecole:"ENSA",consultations:31,statut:"En ligne"},
    {id:7,nom:"Ghazali",prenom:"Youssef",email:"youssef@gmail.com",metier:"Médecin",ecole:"Fac. Médecine",consultations:17,statut:"En attente"},
    {id:8,nom:"Rafiq",prenom:"Hana",email:"hana@gmail.com",metier:"Professeur",ecole:"ENSET",consultations:22,statut:"En ligne"},
  ],
  applications: [
    {nom:"Ouardighi Mehdi",domaine:"Ingénierie",ecole:"ENSIAM",date:"10 Mar 2025",statut:"En attente"},
    {nom:"Belkacem Sara",domaine:"Santé",ecole:"Pharmacie",date:"12 Mar 2025",statut:"En attente"},
    {nom:"Rahimi Karim",domaine:"Droit",ecole:"ENA",date:"08 Mar 2025",statut:"Approuvé"},
    {nom:"Idrissi Nour",domaine:"Commerce",ecole:"ENCG",date:"05 Mar 2025",statut:"En attente"},
    {nom:"Ait Baha Yasmine",domaine:"Éducation",ecole:"ENS",date:"03 Mar 2025",statut:"Refusé"},
    {nom:"Bensouda Hamza",domaine:"Ingénierie",ecole:"ENSA",date:"01 Mar 2025",statut:"Approuvé"},
  ],
  ecoles: [
    {nom:"ENSIAS",domaine:"Sciences & Technologie",villes:"Rabat",duree:"5 ans"},
    {nom:"ENSA",domaine:"Sciences & Technologie",villes:"Kénitra, Fès, Agadir, Marrakech, Tanger",duree:"5 ans"},
    {nom:"ENSAM",domaine:"Sciences & Technologie",villes:"Meknès, Casablanca, Rabat",duree:"5 ans"},
    {nom:"FST",domaine:"Sciences & Technologie",villes:"Béni Mellal, Fès, Mohammedia, Settat, Tanger",duree:"3 à 5 ans"},
    {nom:"EST",domaine:"Sciences & Technologie",villes:"Casablanca, Fès, Meknès, Salé, Agadir",duree:"2 à 3 ans"},
    {nom:"BTS",domaine:"Sciences & Technologie",villes:"National",duree:"2 ans"},
    {nom:"ISTA / OFPPT",domaine:"Sciences & Technologie",villes:"National",duree:"1 à 2 ans"},
    {nom:"ENCG",domaine:"Sciences Économiques & Gestion",villes:"Casablanca, Agadir, Fès, Tanger, Settat, Oujda, Marrakech",duree:"5 ans"},
    {nom:"ISCAE",domaine:"Sciences Économiques & Gestion",villes:"Casablanca, Rabat",duree:"5 ans"},
    {nom:"UIR Business School",domaine:"Sciences Économiques & Gestion",villes:"Rabat",duree:"3 à 5 ans"},
    {nom:"Faculté d'Économie",domaine:"Sciences Économiques & Gestion",villes:"National",duree:"3 à 5 ans"},
    {nom:"Faculté de Médecine",domaine:"Médecine & Santé",villes:"Rabat, Casablanca, Fès, Marrakech, Oujda, Agadir",duree:"7 ans"},
    {nom:"Faculté de Pharmacie",domaine:"Médecine & Santé",villes:"Rabat, Casablanca",duree:"6 ans"},
    {nom:"Faculté de Médecine Dentaire",domaine:"Médecine & Santé",villes:"Rabat, Casablanca",duree:"6 ans"},
    {nom:"ISPITS",domaine:"Médecine & Santé",villes:"Rabat, Casablanca, Fès, Marrakech, Oujda",duree:"3 ans"},
    {nom:"ISSS",domaine:"Médecine & Santé",villes:"Settat",duree:"3 à 5 ans"},
    {nom:"Faculté de Droit",domaine:"Droit & Sciences Politiques",villes:"Rabat, Casablanca, Fès, Marrakech, Agadir, Oujda",duree:"3 à 5 ans"},
    {nom:"ENA",domaine:"Droit & Sciences Politiques",villes:"Rabat",duree:"2 ans"},
    {nom:"Sciences Po / Relations internationales",domaine:"Droit & Sciences Politiques",villes:"Rabat, Casablanca",duree:"3 à 5 ans"},
    {nom:"ISIC",domaine:"Communication & Médias",villes:"Rabat",duree:"3 ans"},
    {nom:"Écoles de communication digitale",domaine:"Communication & Médias",villes:"Casablanca, Rabat, Marrakech",duree:"3 à 5 ans"},
    {nom:"Écoles audiovisuelles",domaine:"Communication & Médias",villes:"Casablanca, Rabat",duree:"2 à 3 ans"},
    {nom:"IAV Hassan II",domaine:"Agriculture & Environnement",villes:"Rabat",duree:"5 ans"},
    {nom:"ENFI",domaine:"Agriculture & Environnement",villes:"Salé",duree:"5 ans"},
    {nom:"IFMEREE",domaine:"Agriculture & Environnement",villes:"Oujda, Tanger, Ouarzazate",duree:"2 à 3 ans"},
    {nom:"École Nationale d'Architecture",domaine:"Arts & Créativité",villes:"Rabat, Fès, Marrakech, Tétouan, Agadir, Oujda",duree:"6 ans"},
    {nom:"Faculté des Arts",domaine:"Arts & Créativité",villes:"Tétouan, Marrakech",duree:"3 à 5 ans"},
    {nom:"Écoles de design graphique",domaine:"Arts & Créativité",villes:"Casablanca, Rabat",duree:"3 à 5 ans"},
    {nom:"Faculté des Lettres",domaine:"Lettres, Langues & Sciences Humaines",villes:"National",duree:"3 à 5 ans"},
    {nom:"ENS",domaine:"Lettres, Langues & Sciences Humaines",villes:"Rabat, Fès, Marrakech, Casablanca",duree:"3 à 5 ans"},
    {nom:"Faculté de Psychologie / Sciences humaines",domaine:"Lettres, Langues & Sciences Humaines",villes:"Rabat, Casablanca, Fès",duree:"3 à 5 ans"},
    {nom:"ARM / Forces Armées Royales",domaine:"Militaire & Sécurité",villes:"Meknès, Benguerir, Kénitra",duree:"3 à 5 ans"},
    {nom:"Marine Royale",domaine:"Militaire & Sécurité",villes:"Casablanca",duree:"3 à 5 ans"},
    {nom:"Gendarmerie Royale",domaine:"Militaire & Sécurité",villes:"Marrakech, Rabat",duree:"2 à 4 ans"},
  ],
  tables: [
    {name:"etudiants",entries:248,size:"1.2 MB",lastModif:"Il y a 3 min"},
    {name:"consultants",entries:34,size:"0.4 MB",lastModif:"Il y a 1h"},
    {name:"domaines",entries:8,size:"0.2 MB",lastModif:"Il y a 15 min"},
    {name:"ecoles",entries:34,size:"0.8 MB",lastModif:"Il y a 1 jour"},
    {name:"sessions",entries:1204,size:"1.7 MB",lastModif:"Il y a 8 min"},
  ],
  logs: [
    {ts:"2025-03-15 14:32",user:"Admin",action:"DELETE",entite:"etudiants#47",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 14:18",user:"Admin",action:"INSERT",entite:"consultants",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 13:55",user:"Admin",action:"UPDATE",entite:"ecoles#12",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 13:40",user:"Admin",action:"LOGIN",entite:"admin",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 12:11",user:"Admin",action:"EXPORT",entite:"etudiants",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 11:44",user:"Admin",action:"UPDATE",entite:"domaines#sante",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 10:30",user:"Admin",action:"INSERT",entite:"etudiants",ip:"196.12.x.x",statut:"OK"},
    {ts:"2025-03-15 09:15",user:"Admin",action:"BACKUP",entite:"all",ip:"196.12.x.x",statut:"OK"},
  ],
};

const ACTIVITY = [
  {dot:"green",text:"<strong>Yassine El Amrani</strong> vient de s'inscrire",time:"Il y a 5 min"},
  {dot:"blue",text:"<strong>Amine Benkirane</strong> a accepté une consultation",time:"Il y a 12 min"},
  {dot:"orange",text:"Le domaine <strong>Sciences & Technologie</strong> a été enrichi",time:"Il y a 28 min"},
  {dot:"blue",text:"<strong>Zineb El Idrissi</strong> a mis à jour son profil",time:"Il y a 45 min"},
  {dot:"red",text:"Un établissement incomplet a été signalé",time:"Il y a 1h"},
  {dot:"green",text:"<strong>3 nouveaux étudiants</strong> inscrits aujourd'hui",time:"Il y a 2h"},
];

const REGIONS = [
  {name:"Rabat",count:82,max:82},{name:"Casablanca",count:74,max:82},{name:"Fès",count:38,max:82},
  {name:"Marrakech",count:29,max:82},{name:"Agadir",count:18,max:82},{name:"Tanger",count:7,max:82},
];

const DOMAINES_DATA = [
  {name:"Ingénierie",pct:38,color:"#5b7fc5"},
  {name:"Santé",pct:24,color:"#27ae60"},
  {name:"Commerce",pct:18,color:"#f39c12"},
  {name:"Droit",pct:10,color:"#e74c3c"},
  {name:"Éducation",pct:7,color:"#8e44ad"},
  {name:"Autres",pct:3,color:"#95a5a6"},
];

let ADMIN_DATA = null;
let CHARTS = {};
let currentEcoleDomain = 'all';

async function loadAdminData() {
  try {
    const res = await fetch('/api/admin/dashboard');
    if (!res.ok) throw new Error('api unavailable');
    ADMIN_DATA = normalizeAdminData(await res.json());
  } catch {
    ADMIN_DATA = buildAdminData(DB);
  }
}

function normalizeAdminData(data) {
  const fallback = buildAdminData(DB);
  return {
    ...fallback,
    ...data,
    kpis: {...fallback.kpis, ...(data.kpis || {})},
    charts: {...fallback.charts, ...(data.charts || {})}
  };
}

function buildAdminData(db) {
  const months = ['Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc'];
  const domainesCount = countBy(db.etudiants, 'domaine');
  const managedDomains = uniqueDomains();
  const villesCount = countBy(db.etudiants, 'ville');
  const totalDomaines = Math.max(db.etudiants.length, 1);
  const maxVille = Math.max(...Object.values(villesCount), 1);
  const consStatus = countBy(db.consultants, 'statut');
  const totalConsultations = db.consultants.reduce((sum, c) => sum + (c.consultations || 0), 0);
  const domaines = Object.entries(domainesCount).map(([name, count], i) => ({
    name,
    count,
    pct: Math.round(count / totalDomaines * 100),
    color: PALETTE[i % PALETTE.length]
  }));
  const studentsMonthly = monthlySeries(db.etudiants, months, true);
  const consultantsMonthly = monthlySeries(db.consultants, months, true);
  return {
    source: 'local',
    kpis: {
      etudiants: db.etudiants.length,
      consultants: db.consultants.length,
      domaines: managedDomains.length,
      consultations: totalConsultations,
      ecoles: db.ecoles.length
    },
    regions: Object.entries(villesCount).map(([name, count]) => ({name, count, max:maxVille})).sort((a,b)=>b.count-a.count),
    domaines: domaines.length ? domaines : DOMAINES_DATA,
    activity: ACTIVITY,
    charts: {
      months,
      inscriptions: {etudiants: studentsMonthly, consultants: consultantsMonthly},
      activite: buildWeeklyActivity(db),
      consultantStatus: [consStatus['En ligne'] || 0, consStatus['Hors ligne'] || 0, consStatus['En attente'] || 0],
      croissance: studentsMonthly,
      filieres: buildFiliereStats(db),
      entonnoir: [
        Math.max(db.etudiants.length * 7, db.etudiants.length),
        db.etudiants.length,
        totalConsultations,
        Math.max(db.consultants.length * 2, managedDomains.length)
      ]
    }
  };
}

function countBy(rows, key) {
  return rows.reduce((acc, row) => {
    const value = row[key] || 'Autres';
    acc[value] = (acc[value] || 0) + 1;
    return acc;
  }, {});
}

function monthIndex(dateText) {
  const map = {'Jan':0,'Fév':1,'Mar':2,'Avr':3,'Mai':4,'Jun':5,'Jul':6,'Aoû':7,'Sep':8,'Oct':9,'Nov':10,'Déc':11};
  const found = Object.keys(map).find(m => (dateText || '').includes(m));
  return found ? map[found] : new Date().getMonth();
}

function monthlySeries(rows, months, cumulative=false) {
  const values = Array(months.length).fill(0);
  rows.forEach(row => values[monthIndex(row.date)]++);
  if (!cumulative) return values;
  let total = 0;
  return values.map(v => total += v);
}

function buildWeeklyActivity(db) {
  const base = Math.max(db.etudiants.length + db.consultants.length, 1);
  return {
    connexions: [0.18,0.23,0.2,0.26,0.19,0.11,0.08].map(x => Math.round(base * x)),
    consultations: [0.08,0.1,0.09,0.13,0.1,0.05,0.04].map(x => Math.round(base * x)),
    publications: [3,4,2,5,4,2,1].map(v => Math.min(v, Math.max(db.consultants.length, 1)))
  };
}

function buildFiliereStats(db) {
  return {
    labels: db.ecoles.slice(0, 8).map(e => e.nom),
    data: db.ecoles.slice(0, 8).map(e => db.etudiants.filter(s => s.domaine === e.domaine).length || 1)
  };
}

function uniqueDomains() {
  return [...new Set(DB.ecoles.map(e => e.domaine))];
}

function domainColor(name, i=0) {
  const idx = uniqueDomains().indexOf(name);
  return PALETTE[(idx >= 0 ? idx : i) % PALETTE.length];
}

/* ══════════════════════════════════
   NAVIGATION
══════════════════════════════════ */
const TITLES = {
  dashboard:"Tableau de bord",stats:"Statistiques",
  etudiants:"Étudiants",consultants:"Consultants",
  ecoles:"Établissements & domaines",
  database:"Base de données",logs:"Journaux d'activité"
};

function showSection(id, el) {
  document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
  document.querySelectorAll('.sb-item').forEach(s => s.classList.remove('active'));
  document.getElementById('sec-'+id).classList.add('active');
  if(el) el.classList.add('active');
  document.getElementById('tbTitle').textContent = TITLES[id]||id;
  // init charts on first visit
  if(id==='dashboard' && !window._chartsInit) initDashboardCharts();
  if(id==='stats' && !window._statsInit) initStatsCharts();
}

/* ══════════════════════════════════
   RENDER TABLES
══════════════════════════════════ */
function statusBadge(s) {
  const map = {
    "Actif":"badge-success","Inactif":"badge-warn","Suspendu":"badge-danger",
    "En ligne":"badge-success","Hors ligne":"badge-mid","En attente":"badge-warn",
    "Approuvé":"badge-success","Refusé":"badge-danger","OK":"badge-success","ERREUR":"badge-danger",
    "INSERT":"badge-success","DELETE":"badge-danger","UPDATE":"badge-warn","LOGIN":"badge-info","EXPORT":"badge-mid","BACKUP":"badge-info",
  };
  return `<span class="badge ${map[s]||'badge-mid'}">${s}</span>`;
}

function initials(prenom,nom){return((prenom||'')[0]||'').toUpperCase()+((nom||'')[0]||'').toUpperCase();}

function renderEtudiants(){
  const tb = document.getElementById('etud-tbody');
  tb.innerHTML = DB.etudiants.map(e=>`
    <tr>
      <td><div class="td-info"><div class="td-avatar">${initials(e.prenom,e.nom)}</div><div><div class="td-name">${e.prenom} ${e.nom}</div><div class="td-email">${e.email}</div></div></div></td>
      <td>${e.ville}</td><td>${e.domaine}</td><td>${e.date}</td>
      <td>${statusBadge(e.statut)}</td>
      <td><div class="td-actions">
        <button class="act-btn view" title="Voir"><svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button>
        <button class="act-btn edit" title="Modifier"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
        <button class="act-btn del" title="Supprimer" onclick="openDeleteModal(${e.id},'étudiant')"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></button>
      </div></td>
    </tr>`).join('');
}

function renderConsultants(){
  const tb = document.getElementById('cons-tbody');
  tb.innerHTML = DB.consultants.map(c=>`
    <tr>
      <td><div class="td-info"><div class="td-avatar">${initials(c.prenom,c.nom)}</div><div><div class="td-name">${c.prenom} ${c.nom}</div><div class="td-email">${c.email}</div></div></div></td>
      <td>${c.metier}</td><td>${c.ecole}</td>
      <td><span style="font-family:'DM Mono',monospace;font-size:.82rem;font-weight:500;">${c.consultations}</span></td>
      <td>${statusBadge(c.statut)}</td>
      <td><div class="td-actions">
        <button class="act-btn approve" title="Approuver" onclick="showToast('Profil validé','success')"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></button>
        <button class="act-btn edit" title="Modifier"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
        <button class="act-btn del" title="Supprimer" onclick="openDeleteModal(${c.id},'consultant')"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></button>
      </div></td>
    </tr>`).join('');
}

function renderApplications(){
  const tb = document.getElementById('app-tbody');
  tb.innerHTML = DB.applications.map((a,i)=>`
    <tr>
      <td><div class="td-info"><div class="td-avatar" style="font-size:.65rem;font-family:'DM Sans',sans-serif;">${a.nom.split(' ').map(w=>w[0]).join('').slice(0,2)}</div><div class="td-name">${a.nom}</div></div></td>
      <td>${a.domaine}</td><td>${a.ecole}</td><td>${a.date}</td>
      <td>${statusBadge(a.statut)}</td>
      <td><div class="td-actions">
        ${a.statut==='En attente'?`
          <button class="act-btn approve" title="Approuver" onclick="approveApp(${i})"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></button>
          <button class="act-btn del" title="Refuser" onclick="rejectApp(${i})"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
        `:`<span style="font-size:.72rem;color:var(--muted);">Traité</span>`}
      </div></td>
    </tr>`).join('');
}

function renderEcoles(){
  const tb = document.getElementById('ecole-tbody');
  tb.innerHTML = DB.ecoles.map((e,i)=>`
    <tr>
      <td><div class="td-name">${e.nom}</div></td>
      <td><span class="badge badge-mid">${e.domaine}</span></td>
      <td style="font-size:.78rem;color:var(--muted);">${e.villes}</td>
      <td><span style="font-family:'DM Mono',monospace;font-size:.8rem;">${e.duree}</span></td>
      <td><div class="td-actions">
        <button class="act-btn edit" title="Modifier"><svg viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button>
        <button class="act-btn del" title="Supprimer" onclick="openDeleteModal(${i},'école')"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></button>
      </div></td>
    </tr>`).join('');
}

function renderDB(){
  const tb = document.getElementById('db-tbody');
  tb.innerHTML = DB.tables.map((t,i)=>`
    <tr>
      <td><span style="font-family:'DM Mono',monospace;font-size:.83rem;color:var(--navy);">📋 ${t.name}</span></td>
      <td><span style="font-family:'DM Mono',monospace;font-weight:600;">${t.entries}</span></td>
      <td>${t.size}</td><td style="color:var(--muted);font-size:.78rem;">${t.lastModif}</td>
      <td><div class="td-actions">
        <button class="act-btn view" title="Voir" onclick="showToast('Table ${t.name} ouverte','info')"><svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button>
        <button class="act-btn warn" style="background:rgba(243,156,18,.1);color:var(--warn);" title="Vider" onclick="openDeleteModal(${i},'table')"><svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></button>
      </div></td>
    </tr>`).join('');
}

function renderLogs(){
  const actionStyle = a => a==='DELETE'?'badge-danger':a==='INSERT'?'badge-success':a==='UPDATE'?'badge-warn':'badge-info';
  const tb = document.getElementById('logs-tbody');
  tb.innerHTML = DB.logs.map(l=>`
    <tr>
      <td style="font-family:'DM Mono',monospace;font-size:.75rem;color:var(--muted);">${l.ts}</td>
      <td>${l.user}</td>
      <td><span class="badge ${actionStyle(l.action)}">${l.action}</span></td>
      <td style="font-family:'DM Mono',monospace;font-size:.75rem;">${l.entite}</td>
      <td style="font-size:.73rem;color:var(--muted);">${l.ip}</td>
      <td>${statusBadge(l.statut)}</td>
    </tr>`).join('');
}

function renderActivityFeed(){
  const feed = document.getElementById('activityFeed');
  const activity = (ADMIN_DATA && ADMIN_DATA.activity) || ACTIVITY;
  feed.innerHTML = activity.map(a=>`
    <div class="activity-item">
      <div class="activity-dot ${a.dot}"></div>
      <div><div class="activity-text">${a.text}</div><div class="activity-time">${a.time}</div></div>
    </div>`).join('');
}

function renderRegions(){
  const el = document.getElementById('regionsList');
  const regions = (ADMIN_DATA && ADMIN_DATA.regions) || REGIONS;
  el.innerHTML = regions.map(r=>`
    <div class="region-item">
      <div class="region-name">${r.name}</div>
      <div class="region-bar-wrap"><div class="region-bar" style="width:${(r.count/r.max*100).toFixed(0)}%"></div></div>
      <div class="region-count">${r.count}</div>
    </div>`).join('');
}

function renderDomaineProgress(){
  const el = document.getElementById('domaineProgress');
  const domaines = (ADMIN_DATA && ADMIN_DATA.domaines) || DOMAINES_DATA;
  el.innerHTML = domaines.map(d=>`
    <div class="prog-item">
      <div class="prog-hdr"><span>${d.name}</span><span>${d.pct}%</span></div>
      <div class="prog-bar"><div class="prog-fill" style="width:0%;background:${d.color}" data-w="${d.pct}"></div></div>
    </div>`).join('');
  setTimeout(()=>el.querySelectorAll('.prog-fill').forEach(b=>{b.style.width=b.dataset.w+'%';}),100);
}

/* ══════════════════════════════════
   CHART.JS CHARTS
══════════════════════════════════ */
const PALETTE = ['#5b7fc5','#27ae60','#f39c12','#e74c3c','#8e44ad','#2980b9','#16a085','#d35400'];
const gridColor = 'rgba(122,158,192,0.1)';
const textColor = '#5a6a82';
const baseFont = {family:"'DM Sans', sans-serif", size:11};

function initDashboardCharts(){
  window._chartsInit = true;
  const data = ADMIN_DATA || buildAdminData(DB);
  const charts = data.charts;
  ['inscriptions','domaines','activite','consStatus'].forEach(k => { if (CHARTS[k]) CHARTS[k].destroy(); });

  CHARTS.inscriptions = new Chart(document.getElementById('chartInscriptions'),{type:'line',data:{
    labels:charts.months,
    datasets:[
      {label:'Étudiants',data:charts.inscriptions.etudiants,borderColor:'#5b7fc5',backgroundColor:'rgba(91,127,197,0.08)',tension:.4,fill:true,pointRadius:3,pointBackgroundColor:'#5b7fc5'},
      {label:'Consultants',data:charts.inscriptions.consultants,borderColor:'#27ae60',backgroundColor:'rgba(39,174,96,0.08)',tension:.4,fill:true,pointRadius:3,pointBackgroundColor:'#27ae60'},
    ]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:16}}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  CHARTS.domaines = new Chart(document.getElementById('chartDomaines'),{type:'doughnut',data:{
    labels:data.domaines.map(d=>d.name),
    datasets:[{data:data.domaines.map(d=>d.count || d.pct),backgroundColor:data.domaines.map(d=>d.color),borderWidth:0,hoverOffset:8}]
  },options:{responsive:true,maintainAspectRatio:false,cutout:'68%',plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:12}}}}});

  CHARTS.activite = new Chart(document.getElementById('chartActivite'),{type:'bar',data:{
    labels:['Lun','Mar','Mer','Jeu','Ven','Sam','Dim'],
    datasets:[
      {label:'Connexions',data:charts.activite.connexions,backgroundColor:'rgba(91,127,197,0.7)',borderRadius:6,borderSkipped:false},
      {label:'Consultations',data:charts.activite.consultations,backgroundColor:'rgba(39,174,96,0.7)',borderRadius:6,borderSkipped:false},
      {label:'Candidatures',data:charts.activite.candidatures,backgroundColor:'rgba(243,156,18,0.7)',borderRadius:6,borderSkipped:false},
    ]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:16}}},scales:{x:{grid:{display:false},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},}}});

  CHARTS.consStatus = new Chart(document.getElementById('chartConsStatus'),{type:'pie',data:{
    labels:['En ligne','Hors ligne','En attente'],
    datasets:[{data:charts.consultantStatus,backgroundColor:['#27ae60','#7a9ec0','#f39c12'],borderWidth:0,hoverOffset:6}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:12}}}}});
  return;

  // Inscriptions LINE
  new Chart(document.getElementById('chartInscriptions'),{type:'line',data:{
    labels:['Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc'],
    datasets:[
      {label:'Étudiants',data:[18,26,34,42,38,51,47,55,62,70,78,248],borderColor:'#5b7fc5',backgroundColor:'rgba(91,127,197,0.08)',tension:.4,fill:true,pointRadius:3,pointBackgroundColor:'#5b7fc5'},
      {label:'Consultants',data:[2,4,5,7,8,10,12,14,18,22,28,34],borderColor:'#27ae60',backgroundColor:'rgba(39,174,96,0.08)',tension:.4,fill:true,pointRadius:3,pointBackgroundColor:'#27ae60'},
    ]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:16}}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  // Domaines DOUGHNUT
  new Chart(document.getElementById('chartDomaines'),{type:'doughnut',data:{
    labels:DOMAINES_DATA.map(d=>d.name),
    datasets:[{data:DOMAINES_DATA.map(d=>d.pct),backgroundColor:DOMAINES_DATA.map(d=>d.color),borderWidth:0,hoverOffset:8}]
  },options:{responsive:true,maintainAspectRatio:false,cutout:'68%',plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:12}}}}});

  // Activité BAR
  new Chart(document.getElementById('chartActivite'),{type:'bar',data:{
    labels:['Lun','Mar','Mer','Jeu','Ven','Sam','Dim'],
    datasets:[
      {label:'Connexions',data:[42,58,51,67,49,23,18],backgroundColor:'rgba(91,127,197,0.7)',borderRadius:6,borderSkipped:false},
      {label:'Consultations',data:[18,24,20,31,22,10,7],backgroundColor:'rgba(39,174,96,0.7)',borderRadius:6,borderSkipped:false},
      {label:'Candidatures',data:[5,8,6,11,9,3,2],backgroundColor:'rgba(243,156,18,0.7)',borderRadius:6,borderSkipped:false},
    ]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:16}}},scales:{x:{grid:{display:false},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},}}});

  // Cons Status
  new Chart(document.getElementById('chartConsStatus'),{type:'pie',data:{
    labels:['En ligne','Hors ligne','En attente'],
    datasets:[{data:[18,11,5],backgroundColor:['#27ae60','#7a9ec0','#f39c12'],borderWidth:0,hoverOffset:6}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor,boxWidth:10,padding:12}}}}});
}

function initStatsCharts(){
  window._statsInit = true;
  const data = ADMIN_DATA || buildAdminData(DB);
  const charts = data.charts;
  ['croissance','filieres','entonnoir'].forEach(k => { if (CHARTS[k]) CHARTS[k].destroy(); });

  CHARTS.croissance = new Chart(document.getElementById('chartCroissance'),{type:'line',data:{
    labels:charts.months,
    datasets:[{label:'Étudiants cumulés',data:charts.croissance,borderColor:'#5b7fc5',backgroundColor:'rgba(91,127,197,0.12)',tension:.4,fill:true,pointRadius:4,pointBackgroundColor:'#5b7fc5'}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor}}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  CHARTS.filieres = new Chart(document.getElementById('chartFilieres'),{type:'bar',data:{
    labels:charts.filieres.labels,
    datasets:[{data:charts.filieres.data,backgroundColor:PALETTE,borderRadius:6,borderSkipped:false}]
  },options:{indexAxis:'y',responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{display:false},ticks:{font:baseFont,color:textColor}}}}});

  CHARTS.entonnoir = new Chart(document.getElementById('chartEntonnoir'),{type:'bar',data:{
    labels:['Visiteurs','Inscrits','Ont consulté','Ont candidaté'],
    datasets:[{data:charts.entonnoir,backgroundColor:['rgba(91,127,197,0.6)','rgba(39,174,96,0.7)','rgba(243,156,18,0.7)','rgba(231,76,60,0.7)'],borderRadius:8,borderSkipped:false}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{grid:{display:false},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  renderDomaineProgress();
  return;

  // Croissance cumulée
  new Chart(document.getElementById('chartCroissance'),{type:'line',data:{
    labels:['Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc'],
    datasets:[{label:'Étudiants cumulés',data:[18,44,78,120,158,209,256,311,373,443,521,248],borderColor:'#5b7fc5',backgroundColor:'rgba(91,127,197,0.12)',tension:.4,fill:true,pointRadius:4,pointBackgroundColor:'#5b7fc5'}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{font:baseFont,color:textColor}}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  // Filières bar horizontal
  new Chart(document.getElementById('chartFilieres'),{type:'bar',data:{
    labels:['Génie Logiciel','Médecine Générale','Finance','MPSI/MP','Droit des affaires','Design Graphique','Pharmacie','Commerce Intl.'],
    datasets:[{data:[87,72,65,58,44,38,33,29],backgroundColor:PALETTE,borderRadius:6,borderSkipped:false}]
  },options:{indexAxis:'y',responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}},y:{grid:{display:false},ticks:{font:baseFont,color:textColor}}}}});

  // Entonnoir
  new Chart(document.getElementById('chartEntonnoir'),{type:'bar',data:{
    labels:['Visiteurs','Inscrits','Ont consulté','Ont candidaté'],
    datasets:[{data:[1800,248,142,87],backgroundColor:['rgba(91,127,197,0.6)','rgba(39,174,96,0.7)','rgba(243,156,18,0.7)','rgba(231,76,60,0.7)'],borderRadius:8,borderSkipped:false}]
  },options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{grid:{display:false},ticks:{font:baseFont,color:textColor}},y:{grid:{color:gridColor},ticks:{font:baseFont,color:textColor}}}}});

  renderDomaineProgress();
}

/* ══════════════════════════════════
   ACTIONS
══════════════════════════════════ */
function filterTable(input, tbodyId){
  const q = input.value.toLowerCase();
  document.querySelectorAll(`#${tbodyId} tr`).forEach(row=>{
    row.style.display = row.textContent.toLowerCase().includes(q)?'':'none';
  });
}
function filterByStatus(sel, tbodyId){
  const q = sel.value.toLowerCase();
  document.querySelectorAll(`#${tbodyId} tr`).forEach(row=>{
    row.style.display = !q||row.textContent.toLowerCase().includes(q)?'':'none';
  });
}

let _deleteTarget = null;
function openDeleteModal(id, type){ _deleteTarget={id,type}; openModal('modal-delete'); }
function confirmDelete(){
  if(_deleteTarget){
    if(_deleteTarget.type==='étudiant'){
      DB.etudiants = DB.etudiants.filter(e=>e.id!==_deleteTarget.id);
      renderEtudiants();
      updateCounts();
    } else if(_deleteTarget.type==='consultant'){
      DB.consultants = DB.consultants.filter(c=>c.id!==_deleteTarget.id);
      renderConsultants();
      updateCounts();
    } else if(_deleteTarget.type==='école'){
      DB.ecoles.splice(_deleteTarget.id,1);
      renderEcoles();
    }
    showToast(`Suppression effectuée (${_deleteTarget.type})`, 'success');
    closeModal(null,document.getElementById('modal-delete'));
    _deleteTarget = null;
  }
}

function addEtudiant(){
  const newId = DB.etudiants.length + 1;
  DB.etudiants.unshift({id:newId,nom:"Nouveau",prenom:"Étudiant",email:"nouveau@email.com",ville:"Rabat",domaine:"Ingénierie",date:new Date().toLocaleDateString('fr-FR',{day:'2-digit',month:'short',year:'numeric'}),statut:"Actif"});
  renderEtudiants();
  updateCounts();
  showToast('Étudiant ajouté avec succès','success');
  closeModal(null,document.getElementById('modal-add-etudiant'));
}
function addConsultant(){
  DB.consultants.unshift({id:DB.consultants.length+1,nom:"Nouveau",prenom:"Consultant",email:"consultant@email.com",metier:"Ingénieur",ecole:"ENSIAS",consultations:0,statut:"En attente"});
  renderConsultants();
  updateCounts();
  showToast('Consultant ajouté avec succès','success');
  closeModal(null,document.getElementById('modal-add-consultant'));
}

function approveApp(i){
  DB.applications[i].statut='Approuvé';
  renderApplications();
  showToast('Candidature approuvée','success');
}
function rejectApp(i){
  DB.applications[i].statut='Refusé';
  renderApplications();
  showToast('Candidature refusée','error');
}

function resetDB(){
  showToast('Base de données réinitialisée','success');
  closeModal(null,document.getElementById('modal-reset-db'));
}
async function refreshData(){
  await loadAdminData();
  renderActivityFeed();
  renderRegions();
  renderDomaineProgress();
  updateCounts();
  initDashboardCharts();
  if (window._statsInit) initStatsCharts();
  showToast(ADMIN_DATA.source === 'local' ? 'Données locales actualisées' : 'Données base actualisées','success');
}
function exportData(){
  showToast('Export CSV en cours…','info');
  setTimeout(()=>showToast('Fichier téléchargé','success'),1200);
}

function updateCounts(){
  const kpis = (ADMIN_DATA && ADMIN_DATA.kpis) || buildAdminData(DB).kpis;
  const ne = kpis.etudiants, nc = kpis.consultants, na = kpis.applications;
  document.getElementById('kpi-etudiants').textContent = ne;
  document.getElementById('kpi-consultants').textContent = nc;
  document.getElementById('kpi-applications').textContent = na;
  document.getElementById('kpi-pending').textContent = kpis.pending;
  document.getElementById('kpi-ecoles').textContent = kpis.ecoles;
  document.getElementById('sb-etud-count').textContent = ne;
  document.getElementById('sb-cons-count').textContent = nc;
  document.getElementById('sb-app-count').textContent = na;
  document.getElementById('etud-count-label').textContent = ne;
  document.getElementById('cons-count-label').textContent = nc;
  document.getElementById('etud-count-footer').textContent = `Affichage de ${Math.min(ne,10)} sur ${ne}`;
}

/* ══════════════════════════════════
   MODAL HELPERS
══════════════════════════════════ */
function openModal(id){ document.getElementById(id).classList.add('open'); }
function closeModal(e,el){ if(!e||e.target===el) el.classList.remove('open'); }

/* ══════════════════════════════════
   TOAST
══════════════════════════════════ */
function showToast(msg, type=''){
  const t = document.getElementById('toast');
  const icons = {success:'<svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>',error:'<svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>',info:'<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>'};
  t.innerHTML = (icons[type]||'') + msg;
  t.className = `toast show ${type}`;
  clearTimeout(t._tid);
  t._tid = setTimeout(()=>t.classList.remove('show'),3000);
}

/* ══════════════════════════════════
   DATE TOPBAR
══════════════════════════════════ */
function setDate(){
  const now = new Date();
  document.getElementById('tbDate').textContent = now.toLocaleDateString('fr-FR',{weekday:'short',day:'2-digit',month:'long',year:'numeric'});
}

/* ══════════════════════════════════
   INIT
══════════════════════════════════ */
async function initAdmin(){
  setDate();
  await loadAdminData();
  renderEtudiants();
  renderConsultants();
  renderApplications();
  renderEcoles();
  renderDB();
  renderLogs();
  renderActivityFeed();
  renderRegions();
  updateCounts();
  initDashboardCharts();
}
initAdmin();
</script>
<script src="static/rgpd.js"></script>
</body>
</html>
