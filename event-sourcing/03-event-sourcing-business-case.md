# 03 - Event Sourcing Business Case

## 1. Bối cảnh
- **Vấn đề hiện tại:** Hệ thống giao dịch đang lưu trạng thái cuối cùng (current state only), không giữ lịch sử thay đổi theo từng bước nghiệp vụ. Khi có khiếu nại hoàn tiền, sai lệch tồn kho, hoặc tranh chấp với đối tác vận chuyển, đội vận hành phải tổng hợp log từ nhiều nguồn (DB, service log, message queue) nên mất nhiều giờ để truy vết.
- **Tác động business:**
  - Thời gian xử lý sự cố cao (MTTR dài), ảnh hưởng trực tiếp đến SLA CSKH.
  - Khó đáp ứng yêu cầu audit/compliance do thiếu “dấu vết nghiệp vụ” nhất quán.
  - Việc tích hợp báo cáo real-time cho Finance/Operations bị chậm vì dữ liệu phát sinh bị phân mảnh.
  - Rủi ro sai sót khi rollback hoặc chỉnh sửa thủ công trạng thái đơn hàng/tài khoản.

## 2. Mục tiêu
- **Mục tiêu ngắn hạn (0–3 tháng):**
  - Thiết lập nền tảng Event Sourcing cho 1 domain trọng yếu (Order/Payment).
  - Chuẩn hoá event contract và cơ chế versioning để các team cùng dùng.
  - Xây dựng dashboard truy vết theo `aggregate_id` giúp điều tra sự cố trong vài phút.
- **Mục tiêu dài hạn (6–12 tháng):**
  - Mở rộng event-driven architecture cho các domain liên quan (Inventory, Fulfillment, Refund).
  - Xây dựng read model phục vụ báo cáo vận hành và tài chính gần real-time.
  - Tạo nền tảng cho khả năng replay dữ liệu, backfill mô hình phân tích và thử nghiệm nghiệp vụ an toàn.

## 3. KPI thành công
- **KPI #1 (Vận hành):** Giảm **40% MTTR** cho nhóm sự cố liên quan trạng thái đơn hàng/thanh toán trong 2 quý.
- **KPI #2 (Chất lượng dữ liệu):** Đạt **>= 99.5%** tỷ lệ đối soát khớp giữa Payment Ledger và Order Status theo ngày.
- **KPI #3 (Hiệu suất phát triển):** Giảm **30% effort** khi triển khai tính năng cần lịch sử trạng thái (audit trail, timeline, rollback logic).

## 4. Phạm vi
- **In scope:**
  - Thiết kế event schema cho domain Order/Payment.
  - Triển khai event store (append-only), cơ chế optimistic concurrency, snapshot cơ bản.
  - Xây read model phục vụ truy vấn timeline và báo cáo vận hành chính.
  - Thiết lập observability (event lag, replay duration, dead-letter monitoring).
- **Out of scope:**
  - Chuyển đổi toàn bộ monolith sang microservices trong giai đoạn đầu.
  - Thay thế toàn bộ hệ thống BI hiện tại.
  - Mở rộng sang tất cả domain nghiệp vụ ngoài Order/Payment ngay lập tức.

## 5. Ước tính chi phí/lợi ích
- **Cost components:**
  - Nguồn lực triển khai: 2 backend engineers + 1 QA + 0.5 DevOps trong 10–12 tuần.
  - Hạ tầng: event store, queue/topic retention dài hơn, monitoring bổ sung.
  - Chi phí chuyển đổi: đào tạo team, viết migration/replay tool, cập nhật runbook vận hành.
- **Benefit components:**
  - Giảm chi phí xử lý sự cố và khiếu nại nhờ truy vết nhanh, chính xác.
  - Tăng độ tin cậy dữ liệu cho đối soát tài chính và báo cáo điều hành.
  - Rút ngắn time-to-market cho các tính năng phụ thuộc lịch sử sự kiện.
  - Tạo lợi thế dài hạn cho personalization/analytics nhờ dữ liệu event chuẩn hoá.
- **Giả định chính:**
  - Khối lượng sự kiện trung bình 2–5 triệu event/ngày trong 12 tháng đầu.
  - Domain Order/Payment chiếm phần lớn ticket vận hành có thể cải thiện bằng audit trail.
  - Các hệ thống downstream chấp nhận mô hình eventual consistency ở mức vài giây đến vài phút.
