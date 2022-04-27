// item : 0  1 2 3 4 5 6 7 8 9 10 11 12 13 

// 1 : 0 1 2 3 4 5 6 7 8 9
// 2 : 10 11 12 13 14 15 16 17 18
//itemPerPage sản phẩm tối đa một trang
// itemPerPage : 9 , currentPage = 1
//start =0 ; end =itemPerPage

//start =(currentPage-1)*itemPerPage;
//end =currentPage*itemPerPage;

// 1: currentPage = (1-1)*9=0, end =1*9=9 , start = 0 end 9
// 2: currentPage = (2-1)*9=9, end =2*9=18 , start = 9 end 18



const product = [{
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Drainage of Thoracic Vertebra, Percutaneous Endoscopic Approach",
  "old": "$5527.52",
  "current": "$667.56"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/15556073-6fad-4534-8e98-6610fbfb0623/dri-fit-23cm-knit-hybrid-training-shorts-hFV81G.png",
  "name": "Bypass Left Vertebral Vein to Upper Vein with Synthetic Substitute, Percutaneous Endoscopic Approach",
  "old": "$5974.21",
  "current": "$113.25"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/d925e4ba-532d-43dd-bdd5-a868a0a182ad/fc-football-pants-9TP65s.png",
  "name": "Excision of Gallbladder, Percutaneous Endoscopic Approach, Diagnostic",
  "old": "$1015.77",
  "current": "$7563.17"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ed6278d1-6915-4a29-b454-7618ecfe3307/dri-fit-strike-football-shorts-jCRHss.png",
  "name": "Monitoring of Cardiac Electrical Activity, Percutaneous Approach",
  "old": "$836.35",
  "current": "$2766.61"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Supplement Left Shoulder Bursa and Ligament with Autologous Tissue Substitute, Percutaneous Endoscopic Approach",
  "old": "$1386.40",
  "current": "$672.44"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/766be395-3be0-4138-86fb-7d19724a1059/dri-fit-training-t-shirt-GVJ4pj.png",
  "name": "Dilation of Left Common Iliac Artery, Bifurcation, with Drug-eluting Intraluminal Device, Percutaneous Endoscopic Approach",
  "old": "$7209.45",
  "current": "$1574.82"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/6790309e-6b80-49fe-bd2b-a5b5f89771ba/fc-dri-fit-knit-football-pants-KkZPF6.png",
  "name": "Supplement Right Basilic Vein with Autologous Tissue Substitute, Open Approach",
  "old": "$5681.77",
  "current": "$1580.77"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Drainage of Sacral Plexus, Percutaneous Approach, Diagnostic",
  "old": "$6586.35",
  "current": "$8161.31"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/92e35163-7006-42a6-848c-666b3f627f95/sportswear-essentials-t-shirt-K9vnhV.png",
  "name": "Restriction of Azygos Vein, Percutaneous Endoscopic Approach",
  "old": "$546.07",
  "current": "$9752.05"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/23721cf3-f7c9-4702-bea5-07133465d78b/jordan-sport-dri-fit-woven-shorts-Fsm4W1.png",
  "name": "Bypass Right Ureter to Cutaneous, Open Approach",
  "old": "$3438.68",
  "current": "$8811.06"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Extirpation of Matter from Left Superior Parathyroid Gland, Percutaneous Approach",
  "old": "$9319.58",
  "current": "$6053.12"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Fragmentation in Left Hepatic Duct, Via Natural or Artificial Opening",
  "old": "$1547.90",
  "current": "$2228.36"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ef7ca51f-e352-45c8-af25-2a60554353cd/dri-fit-swoosh-training-t-shirt-3BpcXz.png",
  "name": "Removal of Nonautologous Tissue Substitute from Abdominal Wall, Percutaneous Endoscopic Approach",
  "old": "$7914.32",
  "current": "$2415.19"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Supplement Accessory Pancreatic Duct with Autologous Tissue Substitute, Percutaneous Endoscopic Approach",
  "old": "$773.80",
  "current": "$2941.36"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/83e4f9cb-cfab-40b2-b6e2-5c5c3d826ae8/sportswear-french-terry-pullover-hoodie-kRDQGK.png",
  "name": "Replacement of Right Choroid with Synthetic Substitute, Percutaneous Approach",
  "old": "$6594.17",
  "current": "$3943.36"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/6f2cac2b-594c-44a0-a4fd-c0b5baf1228a/air-t-shirt-KMCx5c.png",
  "name": "Transfusion of Autologous Cord Blood Stem Cells into Peripheral Vein, Open Approach",
  "old": "$458.25",
  "current": "$6999.48"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/a1cfdb90-e179-4321-bf70-a6735fe22e4c/sportswear-sport-essentials-all-over-print-shorts-D70MDf.png",
  "name": "Inspection of Lower Extremity Subcutaneous Tissue and Fascia, Percutaneous Approach",
  "old": "$7254.61",
  "current": "$7200.35"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Supplement Lower Vein with Autologous Tissue Substitute, Open Approach",
  "old": "$716.43",
  "current": "$4568.95"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/zu7ccflzmxrhf8efp8qn/everyday-cushioned-training-ankle-socks-VNb5d4.png",
  "name": "Drainage of Bilateral Epididymis, Percutaneous Endoscopic Approach, Diagnostic",
  "old": "$6069.17",
  "current": "$5646.34"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Isotope Administration to Whole Body using Strontium 89 (Sr-89)",
  "old": "$3589.47",
  "current": "$5643.88"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/c249b281-37ce-42ab-9db0-0e87d8aa296d/force-swoosh-basketball-t-shirt-wW4PsQ.png",
  "name": "Drainage of Left Hand Vein, Open Approach, Diagnostic",
  "old": "$8605.55",
  "current": "$7978.68"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/yjmjfgvca8w01dcyzokk/sportswear-t-shirt-zmMkxS.png",
  "name": "Dilation of Gastric Artery, Bifurcation, with Drug-eluting Intraluminal Device, Open Approach",
  "old": "$9994.86",
  "current": "$4181.90"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/888d84f7-398e-4fc7-ab03-6080dd5d8268/chelsea-fc-jacket-nQnRf4.png",
  "name": "Reattachment of Right Abdomen Tendon, Open Approach",
  "old": "$4541.94",
  "current": "$8900.67"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/98b370b9-5975-4cc6-9976-5ebacb018a4e/dri-fit-golf-shorts-QNrCtG.png",
  "name": "Bypass Left Common Iliac Artery to Left Renal Artery with Autologous Arterial Tissue, Percutaneous Endoscopic Approach",
  "old": "$8654.82",
  "current": "$7282.20"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e8c69bfe-86b3-4d5f-b72f-350e4afb6bfc/dri-fit-sport-clash-training-t-shirt-zRMxHj.png",
  "name": "Supplement Right Fibula with Synthetic Substitute, Open Approach",
  "old": "$3907.77",
  "current": "$7170.80"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/06535b5f-4cf3-4cdb-a131-15a703273fad/fleece-football-hoodie-kskfvj.png",
  "name": "Removal of Autologous Tissue Substitute from Upper Vein, Open Approach",
  "old": "$9068.07",
  "current": "$4986.29"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e9b3b969-ed8d-425e-9ffc-4049e9333e23/acg-ease-trail-trousers-rhpB2R.png",
  "name": "Extirpation of Matter from Mesenteric Lymphatic, Percutaneous Approach",
  "old": "$6697.86",
  "current": "$9359.13"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Supplement Left Palatine Bone with Synthetic Substitute, Open Approach",
  "old": "$8408.10",
  "current": "$7467.66"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/cdfe5909-59a5-403f-8e2d-59d40d1b447d/acg-monolithic-t-shirt-whbZFj.png",
  "name": "Transfer Left Thorax Tendon, Open Approach",
  "old": "$5201.90",
  "current": "$3504.17"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/56c18a92-ef3c-4c35-ad58-7fcca64a04b4/acg-iceland-long-sleeve-t-shirt-Sb9tLt.png",
  "name": "Dilation of Left Posterior Tibial Artery with Four or More Drug-eluting Intraluminal Devices, Percutaneous Endoscopic Approach",
  "old": "$6020.41",
  "current": "$1362.90"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/2d69fc09-4e00-45c9-88d8-2a8d628d477f/jordan-23-engineered-85-long-sleeve-t-shirt-4Wmng7.png",
  "name": "Occlusion of Left Femoral Artery with Intraluminal Device, Percutaneous Approach",
  "old": "$152.76",
  "current": "$3918.21"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/3ed8fa10-a966-4ad3-9a4a-eb3526d03429/acg-glacier-long-sleeve-t-shirt-BC10DD.png",
  "name": "Extirpation of Matter from Right External Jugular Vein, Percutaneous Endoscopic Approach",
  "old": "$3331.11",
  "current": "$1326.90"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Destruction of Left Seminal Vesicle, Percutaneous Approach",
  "old": "$1117.48",
  "current": "$2715.30"
}, {
  "img": "https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/w_415",
  "name": "Extirpation of Matter from Carina, Percutaneous Endoscopic Approach",
  "old": "$9195.84",
  "current": "$5586.13"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Introduction of Analgesics, Hypnotics, Sedatives into Subcutaneous Tissue, Percutaneous Approach",
  "old": "$3661.48",
  "current": "$2455.78"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Transfer Facial Nerve to Olfactory Nerve, Percutaneous Endoscopic Approach",
  "old": "$9026.90",
  "current": "$7155.98"
}, {
  "img": "https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/w_415",
  "name": "Fusion of Right Temporomandibular Joint with Synthetic Substitute, Percutaneous Approach",
  "old": "$7929.59",
  "current": "$6870.77"
}, {
  "img": "w_592",
  "name": "Sensory Aids Assessment using Assistive Listening Equipment",
  "old": "$247.07",
  "current": "$4405.56"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Revision of External Fixation Device in Left Metacarpophalangeal Joint, Percutaneous Endoscopic Approach",
  "old": "$8630.56",
  "current": "$6496.52"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Dilation of Right Renal Artery, Bifurcation, with Three Intraluminal Devices, Percutaneous Endoscopic Approach",
  "old": "$8671.07",
  "current": "$9258.85"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/eb751e16-43c2-4495-b976-7c7c86ebcf63/solo-swoosh-fleece-hoodie-dbBmL4.png",
  "name": "Dilation of Bladder Neck with Intraluminal Device, Via Natural or Artificial Opening",
  "old": "$2462.52",
  "current": "$5669.74"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/552134f4-30df-48f7-9941-25ca2004d75c/solo-swoosh-fleece-trousers-SqXzdR.png",
  "name": "Planar Nuclear Medicine Imaging of Chest and Abdomen using Other Radionuclide",
  "old": "$5906.51",
  "current": "$3209.32"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Insertion of Intraluminal Device into Right Radial Artery, Open Approach",
  "old": "$6609.30",
  "current": "$8925.34"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Drainage of Right Hip Muscle, Open Approach",
  "old": "$1841.52",
  "current": "$6303.05"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ffd4f3f5-dbdd-4cd9-bb3b-4867a7f0f5b8/acg-polartec-wolf-tree-pullover-hoodie-BjNLhx.png",
  "name": "Dilation of Celiac Artery with Two Intraluminal Devices, Percutaneous Approach",
  "old": "$9970.42",
  "current": "$7976.01"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/170d5731-2fc5-487d-b46d-32d2707d1a48/jordan-sport-dri-fit-diamond-shorts-XF3JZ5.png",
  "name": "Excision of Right Hip Tendon, Percutaneous Endoscopic Approach, Diagnostic",
  "old": "$1326.31",
  "current": "$5897.50"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Release Jejunum, Percutaneous Approach",
  "old": "$6935.38",
  "current": "$490.11"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Revision of Synthetic Substitute in Tracheobronchial Tree, Open Approach",
  "old": "$2110.73",
  "current": "$1478.22"
}, {
  "img": "https://static.nike.com/a/images/c_limit",
  "name": "Release Epiglottis, Via Natural or Artificial Opening",
  "old": "$9608.53",
  "current": "$2422.66"
}, {
  "img": "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/b41458c4-803b-47eb-a56f-53c3fe1ec939/jordan-sport-dna-mesh-shorts-vnXrsM.png",
  "name": "Supplement Right Palatine Bone with Autologous Tissue Substitute, Open Approach",
  "old": "$428.82",
  "current": "$5199.38"
}]
let perPage = 9;
let currentPage = 1;
let start = 0 ;
let end = perPage;

const totalPage = Math.ceil(product.length / perPage);
const bntNext = document.querySelector('.ti-angle-right');
const bntBack = document.querySelector('.ti-angle-left');

function getCurrentPage(currentPage) {
  start =(currentPage-1)*perPage;
  end =currentPage*perPage;
}
function renderProduct() {
  html='';
  const content = product.map((item,index) => {
    if(index >= start && index <end){
      html += '<div class="col l-4" >';
      html += '<div class="home-product-item">';
      html += '<a>';
      html += '<img src='+item.img+ '>';
      html += '</a>';
      html += '<span class="home-product-item_name">'+item.name+'';
      html += '</span>';
      html += '<div class="home-product-item_price">';
      html += '<span class="home-product-item_price-old"> '+item.old+'';
      html += '</span>';
      html += '<span class="home-product-item_price-current"> '+item.current+''
      html += '</span>';
      html += '</div>';
      html += '</div>';
      html += '</div>';
      return html;
    }
  })
  document.getElementById('sanpham').innerHTML = html;
}
renderProduct();
renderListPage();
function renderListPage() {
  let html = '';

  html += `<li class="foward-btn"><a>${1}</a></li>`;
  for(let i =2; i<=totalPage ; i++){
    html += `<li><a>${i}</a></li>`;
  }
  document.getElementById('number-page').innerHTML = html
}
function changePage() {
  const currentPagess = document.querySelectorAll('.number-page li');
  for (let i = 0; i < currentPagess.length; i++) {
    currentPagess[i].addEventListener('click',() =>{
      let value = i + 1;
      currentPage = value;
      console.log(value);
      getCurrentPage(currentPage);
      renderProduct();
    })   
  }
}
changePage();


bntNext.addEventListener('click',()=>{
  currentPage++;
  if(currentPage > totalPage){
    currentPage = totalPage;
  }
  getCurrentPage(currentPage);
  console.log(start,end);
  renderProduct();
})
bntBack.addEventListener('click',()=>{
  currentPage--;
  if(currentPage <= 1){
    currentPage = 1;
  }
  getCurrentPage(currentPage);
  console.log(start,end);
  renderProduct();
})


