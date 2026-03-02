# Ma trận cập nhật theo 49 process PMP khi triển khai Event Sourcing

Quy ước:
- **Cập nhật mạnh**: phải chỉnh sửa rõ ràng.
- **Cập nhật nhẹ**: rà soát + bổ sung ngắn.
- **Theo dõi**: chủ yếu monitor/control, không cần sửa lớn baseline ngay.

## 1) Initiating Process Group

| Process | Mức độ | Tài liệu cần update / tạo mới |
|---|---|---|
| Develop Project Charter | Cập nhật mạnh | Charter: thêm mục tiêu kiến trúc Event Sourcing, business value, ràng buộc kỹ thuật |
| Identify Stakeholders | Cập nhật nhẹ | Stakeholder register: thêm nhóm Data/Platform/Compliance/Support |

## 2) Planning Process Group

| Knowledge Area | Process | Mức độ | Tài liệu cần update / tạo mới |
|---|---|---|---|
| Integration | Develop Project Management Plan | Cập nhật mạnh | PMP tổng thể + phụ lục kiến trúc Event Sourcing |
| Integration | Plan Scope Management | Cập nhật nhẹ | Scope management plan |
| Scope | Collect Requirements | Cập nhật mạnh | BRD/SRS + Event storming output |
| Scope | Define Scope | Cập nhật mạnh | Scope statement (bounded context, in/out scope) |
| Scope | Create WBS | Cập nhật mạnh | WBS có work package event store, projection, migration |
| Schedule | Plan Schedule Management | Cập nhật nhẹ | Quy tắc estimate cho migration/replay |
| Schedule | Define Activities | Cập nhật mạnh | Danh sách activity theo stream/projection/integration |
| Schedule | Sequence Activities | Cập nhật mạnh | Dependency command/event/read model |
| Schedule | Estimate Activity Durations | Cập nhật mạnh | Duration estimate cho backfill/rebuild projection |
| Schedule | Develop Schedule | Cập nhật mạnh | Timeline + buffer kỹ thuật |
| Cost | Plan Cost Management | Cập nhật nhẹ | Cost baseline method |
| Cost | Estimate Costs | Cập nhật mạnh | Ước tính hạ tầng event store, storage, vận hành |
| Cost | Determine Budget | Cập nhật mạnh | Budget phased rollout |
| Quality | Plan Quality Management | Cập nhật mạnh | Quality plan cho idempotency, ordering, replay correctness |
| Resource | Plan Resource Management | Cập nhật nhẹ | Vai trò mới: event modeler, platform engineer |
| Resource | Estimate Activity Resources | Cập nhật mạnh | Năng lực domain + distributed systems |
| Communications | Plan Communications Management | Cập nhật nhẹ | Cơ chế báo cáo tiến độ migration/risk |
| Risk | Plan Risk Management | Cập nhật nhẹ | Khung risk cho consistency, data loss |
| Risk | Identify Risks | Cập nhật mạnh | Risk register chuyên biệt Event Sourcing |
| Risk | Perform Qualitative Risk Analysis | Cập nhật mạnh | Xếp hạng rủi ro |
| Risk | Perform Quantitative Risk Analysis | Cập nhật nhẹ | Dùng khi dự án lớn/critical |
| Risk | Plan Risk Responses | Cập nhật mạnh | Mitigation + contingency |
| Procurement | Plan Procurement Management | Cập nhật nhẹ | Make/buy event store/tooling |
| Stakeholder | Plan Stakeholder Engagement | Cập nhật nhẹ | Kế hoạch truyền thông thay đổi |

## 3) Executing Process Group

| Process | Mức độ | Tài liệu cần update / tạo mới |
|---|---|---|
| Direct and Manage Project Work | Cập nhật mạnh | Work performance data, implementation records |
| Manage Project Knowledge | Cập nhật mạnh | Lessons learned + playbook vận hành |
| Manage Quality | Cập nhật mạnh | Kết quả quality assurance cho replay, contract events |
| Acquire Resources | Cập nhật nhẹ | Staffing plan |
| Develop Team | Cập nhật nhẹ | Kế hoạch đào tạo Event Sourcing |
| Manage Team | Cập nhật nhẹ | Team performance docs |
| Manage Communications | Cập nhật nhẹ | Status report chuyên đề |
| Implement Risk Responses | Cập nhật mạnh | Risk action log |
| Conduct Procurements | Cập nhật nhẹ | Vendor selection record |
| Manage Stakeholder Engagement | Cập nhật nhẹ | Engagement log |

## 4) Monitoring & Controlling Process Group

| Process | Mức độ | Tài liệu cần update / tạo mới |
|---|---|---|
| Monitor and Control Project Work | Cập nhật mạnh | KPI: lag projection, event throughput, incident rate |
| Perform Integrated Change Control | Cập nhật mạnh | Change requests cho schema/versioning |
| Validate Scope | Cập nhật mạnh | Acceptance criteria theo business invariants |
| Control Scope | Cập nhật nhẹ | Scope change log |
| Control Schedule | Cập nhật mạnh | Theo dõi trễ do migration/rebuild |
| Control Costs | Cập nhật mạnh | Burn rate hạ tầng + vận hành |
| Control Quality | Cập nhật mạnh | Defect trend liên quan consistency/data correctness |
| Control Resources | Cập nhật nhẹ | Capacity tracking |
| Monitor Communications | Cập nhật nhẹ | Communication effectiveness |
| Monitor Risks | Cập nhật mạnh | Trigger/threshold rủi ro |
| Control Procurements | Cập nhật nhẹ | SLA/vendor performance |
| Monitor Stakeholder Engagement | Cập nhật nhẹ | Adoption/chấp nhận thay đổi |

## 5) Closing Process Group

| Process | Mức độ | Tài liệu cần update / tạo mới |
|---|---|---|
| Close Project or Phase | Cập nhật mạnh | Phase closure report, handover vận hành, lessons learned |

## Danh sách tài liệu PMP nên ưu tiên cập nhật ngay
1. Project Charter
2. Project Management Plan
3. Scope Baseline (scope statement + WBS)
4. Schedule Baseline
5. Cost Baseline
6. Quality Management Plan
7. Risk Register + Risk Responses
8. Change Log / Change Requests
9. Lessons Learned Register

