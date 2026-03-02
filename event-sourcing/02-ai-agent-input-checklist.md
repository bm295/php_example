# Checklist file Markdown cần tạo để làm input cho AI agent

## Mục tiêu
Để AI agent hỗ trợ tốt (phân tích yêu cầu, design, estimate, risk, test plan, migration plan), cần có bộ input chuẩn hóa.

## File bắt buộc (nên có)

1. `03-event-sourcing-business-case.md`
   - Bài toán kinh doanh, KPI, kỳ vọng ROI.
2. `04-domain-event-storming.md`
   - Domain events, commands, actors, aggregate boundary.
3. `05-event-catalog.md`
   - Danh mục event chuẩn (schema, versioning, producer/consumer).
4. `06-command-catalog.md`
   - Danh mục command + validation + business rules.
5. `07-read-model-catalog.md`
   - Danh mục projection/read model + SLA truy vấn.
6. `08-architecture-decision-records.md`
   - Quyết định kiến trúc (event store, consistency, snapshot, outbox, CQRS).
7. `09-nfr-slo-security.md`
   - NFR/SLO: latency, throughput, availability, security, audit.
8. `10-migration-cutover-plan.md`
   - Kế hoạch chuyển đổi từ hệ hiện tại sang Event Sourcing.
9. `11-test-strategy-replay.md`
   - Test strategy cho replay, contract test, chaos/failure scenarios.
10. `12-risk-register-event-sourcing.md`
    - Risk register chuyên biệt + phương án ứng phó.

## Input bổ sung (khuyến nghị)
- Data retention & compliance policy.
- Incident response runbook.
- Observability dashboard spec.

